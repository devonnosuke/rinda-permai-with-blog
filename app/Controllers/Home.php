<?php

namespace App\Controllers;

use Config\Services;

class Home extends BaseController
{
    public function index()
    {
        $data['title'] = 'Home';
        return view('home/home', $data);
    }

    public function about()
    {
        $data['title'] = 'About';
        return view('home/about', $data);
    }

    public function add()
    {
        $data['validation'] = Services::validation();
        return view('form-sample', $data);
    }
}
