<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PropertyController extends BaseController
{
    public function index()
    {
        $model = new \App\Models\PropertyModel();
        $data['title'] = 'Daftar [property] 📃';

        $search = $this->request->getVar('search');
        if ($search) {
            $data['property'] = $model->searching($search);
        } else {
            $data['property'] = $model->findAll();
        }

        return view('admin/PropertyView', $data);
    }
}
