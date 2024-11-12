<?php

namespace App\Controllers;

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
        $data = [
            'title' => 'Landing Page',
            'css' => ['landing.css', 'landing2.css'],
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
