<?php

namespace App\Controllers;

use App\Models\CaisseModel;

class AchatController extends BaseController
{
    public function saisie()
    {
        return view('achat/saisie');
    }
}
