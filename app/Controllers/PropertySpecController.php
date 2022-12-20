<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PropertySpecController extends BaseController
{

    public function index()
    {
        $model = new \App\Models\PropertySpecModel();
        $data['title'] = 'Daftar Property Spec';


        $data['PropertySpec'] = $model->findAll();

        return view('admin/PropertySpecView', $data);
    }
}
