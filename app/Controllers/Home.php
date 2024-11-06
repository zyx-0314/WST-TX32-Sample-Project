<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Landing Page',
            'pageH1'=> 'This is the Landing Page',
            'css'=> '',
        ];

        return view('landing', $data);
    }

    public function landing(): string
    {
        $data = [
            'title' => 'Landing Page',
            'pageH1'=> 'This is the Landing Page',
            'css'=> ['landing.css', 'landing2.css'],
        ];

        return view('landing', $data);
    }

    public function about(): string
    {
        $data = [
            'title' => 'About Page',
            'css'=> [''],
        ];
        
        return view('about', $data);
    }

    public function catalog(): string
    {
        $data = [
            'title' => 'Catalog Page',
            'css'=> [''],
        ];

        return view('product_catalog', $data);
    }
}
