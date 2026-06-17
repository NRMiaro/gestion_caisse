<?php

namespace App\Controllers;

use App\Models\CaisseModel;

class CaisseController extends BaseController
{
    public function choix()
    {
        $caisseModel = new CaisseModel();
        $listCaisses = $caisseModel->findAll();

        return view('caisse/choix', [
            'listCaisses' => $listCaisses
        ]);
    }

    public function validerChoix(){
        $caisseModel = new CaisseModel();
        $idCaisse = $this->request->getPost('id_caisse');
        $caisse = $caisseModel->find($idCaisse);
        if (!$caisse){
            return redirect()->to(base_url('/caisse/choix'));
        } else {
            session()->set('id_caisse', $idCaisse);
            return redirect()->to(base_url('/achat/saisie'));
        }
    }
}
