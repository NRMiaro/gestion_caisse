<?php

namespace App\Models;

use CodeIgniter\Model;

class AchatModel extends Model
{
    protected $table = 'achat';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'id_caisse',
        'id_user',
        'montant_total'
    ];

    protected $validationRules = [
        'id_caisse' => "required",
        'id_user' => "required",
        'montant_total' => "decimal|greater_than_equal_to[0]"
    ];

    protected $validationMessages = [
        'id_caisse' => [
            "required" => "Caisse necessaire"
        ],
        'id_user' => [
            "required" => "Caissier enregistreur necessaire"
        ],
        'montant_total' => [
            "decimal" => "Le montant total doit etre un nombre", 
            "greater_than_equal_to" => ""
        ] 
    ];

}