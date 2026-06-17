<?php

namespace App\Models;

use CodeIgniter\Model;

class AchatDetailModel extends Model
{
    protected $table = 'achat_detail';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'id_achat',
        'id_produit',
        'quantite',
        'montant'
    ];
    protected $validationRules = [
        'id_produit' => "required",
        'quantite' => "integer|greater_than[0]",
        'montant' => "decimal|greater_than[0]"
    ];

    protected $validationMessages = [
        'id_produit' => [
            "required" => "Produit invalide"
        ],
        'quantite' => [
            "integer" => "La quantite doit etre un entier",
            "greater_than" => "Le montant doit etre superieur a 0"
        ],
        'montant' => [
            "decimal" => "La quantite doit etre un nombre",
            "greater_than" => "Le montant doit etre superieur a 0"
        ],
    ];
}