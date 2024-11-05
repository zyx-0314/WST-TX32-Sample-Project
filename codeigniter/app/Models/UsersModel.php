<?php
namespace App\Models;
use CodeIgniter\Model;

class UsersModel extends Model{
    protected $table = 'tblusers';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'username',
        'password',
    ];

    protected $returnType = 'object';
}
?>