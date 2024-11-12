<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';  // Ensure this matches your database table name
    protected $primaryKey = 'id';  // Replace with the actual primary key of your table
    protected $allowedFields = ['name', 'email', 'password'];  // Add columns of the users table here

    // Specify any other properties like timestamps or validation rules as needed
}
