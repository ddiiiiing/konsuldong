<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function products(): string
    {
        return view('products');
    }

    public function testimoni(): string
    {
        return view('testimoni');
    }

    public function contact(): string
    {
        return view('contacts');
    }
}
