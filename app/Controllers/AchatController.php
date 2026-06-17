<?php

namespace App\Controllers;

use App\Models\AchatModel;
use App\Models\AchatDetailModel;
use App\Models\ProduitModel;

class AchatController extends BaseController
{
    public function saisie()
    {
        $produitModel = new ProduitModel();

        $session = session();

        // panier stocké en session
        $panier = $session->get('panier') ?? [];

        $listProduits = $produitModel->findAll();

        return view('achat/saisie', [
            'listProduits' => $listProduits,
            'panier' => $panier
        ]);
    }

    // AJOUT PRODUIT AU PANIER (achat_detail temporaire)
    public function addToCart()
    {
        $session = session();
        $produitModel = new ProduitModel();

        $idProduit = $this->request->getPost('id_produit');
        $quantite = (int) $this->request->getPost('quantite');

        $produit = $produitModel->find($idProduit);

        if (!$produit) {
            return redirect()->back();
        }

        $panier = $session->get('panier') ?? [];

        // si produit existe déjà dans panier
        if (isset($panier[$idProduit])) {
            $panier[$idProduit]['quantite'] += $quantite;
        } else {
            $panier[$idProduit] = [
                'id' => $idProduit,
                'designation' => $produit['designation'],
                'prix' => $produit['prix_unitaire'],
                'quantite' => $quantite
            ];
        }

        $session->set('panier', $panier);

        return redirect()->to('/achat/saisie');
    }

    // supprimer un item
    public function removeItem($id)
    {
        $session = session();
        $panier = $session->get('panier') ?? [];

        unset($panier[$id]);

        $session->set('panier', $panier);

        return redirect()->to('/achat/saisie');
    }

    public function finaliser()
    {
        $session = session();
        $panier = $session->get('panier') ?? [];

        if (empty($panier)) {
            return redirect()->to('/achat/saisie');
        }

        $achatModel = new AchatModel();
        $detailModel = new AchatDetailModel();
        $produitModel = new ProduitModel();

        $idCaisse = $session->get('id_caisse') ?? 1;
        $idUser   = $session->get('id_user') ?? 1;

        $total = 0;
        foreach ($panier as $item) {
            $total += $item['prix'] * $item['quantite'];
        }

        try {
            // créer achat
            $achatId = $achatModel->insert([
                'id_caisse' => $idCaisse,
                'id_user' => $idUser,
                'montant_total' => $total
            ], true);

            // créer details + update stock
            foreach ($panier as $item) {

                $montant = $item['prix'] * $item['quantite'];

                // achat_detail
                $detailModel->insert([
                    'id_achat' => $achatId,
                    'id_produit' => $item['id'],
                    'quantite' => $item['quantite'],
                    'montant' => $montant
                ]);

                // update stock produit
                $produitModel->set('quantite_stock', 'quantite_stock - ' . (int)$item['quantite'], false)
                    ->where('id', $item['id'])
                    ->update();
            }

            // 3. vider panier
            $session->remove('panier');

            return redirect()->to('/achat/saisie')
                ->with('success', 'Vente finalisée avec succès');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
