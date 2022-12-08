<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ContactController extends BaseController
{

    public function index()
    {
        $model = new \App\Models\ContactModel();
        $data['title'] = 'Daftar Contact 📃';


        $data['contact'] = $model->findAll();

        return view('admin/ContactView', $data);
    }
}
