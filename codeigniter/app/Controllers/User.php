<?php

namespace App\Controllers;

use App\Models\UsersModel;

class User extends BaseController
{
    public function index(): string {
        $data['title'] = 'Viewing Users List';
        $data['page_title'] = 'Viewing Users List';

        $user_model = new UsersModel();

        $data['users'] = $user_model->findAll();

        return view('users/read', $data);
    }

    public function create(): string {
        return view('users/create');
    }

    public function update(): string {
        return view('users/update');
    }

    public function delete(): string {
        return view('users/delete');
    }
}

?>