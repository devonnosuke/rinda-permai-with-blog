<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AboutController extends BaseController
{

    public function index()
    {
        $model = new \App\Models\AboutModel();
        $data['title'] = 'Daftar About 📃';


        $data['About'] = $model->findAll();

        return view('admin/AboutView', $data);
    }
}
