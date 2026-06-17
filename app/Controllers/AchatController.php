<?php

namespace App\Controllers;

use App\Models\ProduitModel;
use App\Models\AchatModel;


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

    public function historique()
    {
        $model = new AchatModel();
        $achats = $model->select(' achat.id, achat.montant_total, caisse.numero, user.email ')->join('caisse', 'caisse.id = achat.id_caisse')->join('user', 'user.id = achat.id_user')->findAll();
        return view('achat/historique', ['title' => 'Historique des achats', 'achats' => $achats]);
    }
}
