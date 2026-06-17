<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'email',
        'mot_de_passe'
    ];

    protected $validationRules = [
        'email' => 'required|valid_email',
        'mot_de_passe' => 'required|min_length[6]'
    ];

    protected $validationMessages = [
        'email' => [
            'required' => 'Email obligatoire',
            'valid_email' => 'Email invalide'
        ],
        'mot_de_passe' => [
            'required' => 'Mot de passe obligatoire',
            'min_length' => 'Minimum 6 caractères'
        ]
    ];
    
}