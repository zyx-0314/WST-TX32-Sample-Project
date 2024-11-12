<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    public function index()
    {
        $data['title'] = 'Viewing Users List';
        $data['page_title'] = 'Viewing Users List';

        $user_model = new UserModel();

        $data['users'] = $user_model->where('active', 1)->findAll();

        return view('users/read', $data);
    }

    public function showForm()
    {
        $data = [
            'title' => 'Form Page',
            'css' => [''],
            'message' => ''
        ];

        return view('users/form', $data);
    }

    public function createUser()
    {
        $data = [
            'title' => 'Creating User',
            'css' => [''],
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT), // Hash password
            'message' => ''
        ];

        $userModel = new UserModel();

        if ($userModel->insert($data)) {
            return redirect()->to('/user/success');
        } else {
            return redirect()->to('/user/failure');
        }
    }

    public function success()
    {
        $userModel = new UserModel();

        $users = [];
        $message = session()->getFlashdata('message'); // Retrieve the flash message from the session

        try {
            $users = $userModel->where('active', 1)->findAll();
            $message = $message ?: (count($users) > 0 ? 'Users retrieved successfully.' : 'No users found.');
        } catch (\Exception $e) {
            $message = 'Error retrieving users: ' . $e->getMessage();
        }

        $data = [
            'title' => 'Landing Page',
            'css' => ['landing.css', 'landing2.css'],
            'users' => $users,
            'message' => $message
        ];

        return view('users/read', $data);
    }

    public function failure()
    {
        $userModel = new UserModel();

        $users = [];
        $message = '';

        try {
            $users = $userModel->where('active', 1)->findAll();
            $message = count($users) > 0 ? 'Users retrieved successfully.' : 'No users found.';
        } catch (\Exception $e) {
            $message = 'Error retrieving users: ' . $e->getMessage();
        }

        $data = [
            'title' => 'Landing Page',
            'css' => ['landing.css', 'landing2.css'],
            'users' => $users,
            'message' => $message
        ];

        return view('users/read', $data);
    }

    public function updateForm($id)
    {
        $userModel = new UserModel();
        $user = $userModel->find($id);

        $message = $user ? "User Found" : 'User not Found';

        $data = [
            'title' => 'Form Page',
            'css' => [''],
            'message' => $message,
            'user' => $user
        ];


        return view('users/update', $data);
    }

    public function updateUser($id)
    {
        $data = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
        ];

        $userModel = new UserModel();

        $updateStatus = $userModel->update($id, [
            'username'     => $data['username'],
            'email'    => $data['email'],
        ]);

        $data['message'] = $updateStatus ? "Update Success" : 'Update Failed';

        return redirect()->to('/user/success')->with('message', $data['message']);
    }


    public function deleteUser($id)
    {
        $userModel = new UserModel();

        $updateStatus = $userModel->update($id, [
            'active' => 0
        ]);

        $data['message'] = $updateStatus ? "Delete Success" : 'Delete Failed';

        return redirect()->to('/user/success')->with('message', $data['message']);
    }

}
