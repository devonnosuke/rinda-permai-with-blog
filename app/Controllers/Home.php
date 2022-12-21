<?php

namespace App\Controllers;

use Config\Services;

class Home extends BaseController
{
    public function index()
    {
        $data['title'] = 'Home';
        $model = new \App\Models\PublicFacilityModel();

        $data['facility'] = $model->findAll();

        return view('home/home', $data);
    }

    public function about()
    {
        $data['title'] = 'About';
        return view('home/about', $data);
    }

    public function blog()
    {
        $data['title'] = 'Blog';
        return view('home/blog', $data);
    }

    public function add()
    {
        $data['validation'] = Services::validation();
        return view('form-sample', $data);
    }
}
