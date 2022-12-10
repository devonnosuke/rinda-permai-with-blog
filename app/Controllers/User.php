<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class User extends BaseController
{
    public function index()
    {
        return view('User_View');
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
