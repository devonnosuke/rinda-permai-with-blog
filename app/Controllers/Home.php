<?php

namespace App\Controllers;

use Config\Services;

class Home extends BaseController
{
    public function index()
    {
        $data['validation'] = Services::validation();
        return view('sample', $data);
    }
}
