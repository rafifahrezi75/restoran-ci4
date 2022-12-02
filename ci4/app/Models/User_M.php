<?php 

namespace App\models;
use CodeIgniter\Model;

class User_M extends Model
{
    protected $table = 'tbluser';

    protected $allowedFields = ['user','email','password','level','aktif'];

    protected $primaryKey = 'iduser';

    protected $validationRules    = [
        'user'      => 'alpha_numeric_space|min_length[3]|is_unique[tbluser.user]',
        'email'      => 'valid_email'

    ];

    protected $validationMessages = [
        'user'      => [
            'alpha_numeric_space' => 'Tidak Boleh Menggunakan Simbol',
            'min_length' => 'Minimal 3 Huruf',
            'is_unique' => 'Ada Data Yang Sama'
        ],
        'email'      => [
            'valid_email' => 'Email Salah'
        ]

    ];

    
}


?>