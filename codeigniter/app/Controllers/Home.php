<?php

namespace App\Controllers;
use App\Models\UserModel;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Landing Page',
            'css' => '',
        ];

        return view('landing', $data);
    }

    public function landing(): string
    {
        $userModel = new UserModel();
    
        $users = [];
        $message = '';
    
        try {
            $users = $userModel->findAll();
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
    
        return view('landing', $data);
    }

    public function about(): string
    {
        $data = [
            'title' => 'About Page',
            'css' => [''],
        ];

        return view('about', $data);
    }

    public function catalog(): string
    {
        $data = [
            'title' => 'Catalog Page',
            'css' => [''],
        ];

        return view('product_catalog', $data);
    }

    public function team(): string
    {
        $data = [
            'title' => 'Team Page',
            'css' => [''],
        ];

        return view('team', $data);
    }

    public function contact(): string
    {
        $data = [
            'title' => 'Contact Page',
            'css' => [''],
        ];

        return view('contact', $data);
    }

    public function features(): string
    {
        $data = [
            'title' => 'Features Page',
            'css' => [''],
        ];

        return view('features', $data);
    }
}
