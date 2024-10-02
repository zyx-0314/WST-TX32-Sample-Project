<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('landing');
    }

    public function landing(): string
    {
        return view('landing');
    }

    public function about(): string
    {
        return view('about');
    }

    public function catalog(): string
    {
        return view('product_catalog');
    }
}
