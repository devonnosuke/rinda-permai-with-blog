<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CategoryController extends BaseController
{
    public function index()
    {
        $model = new \App\Models\CategoryModel();
        $data['title'] = ' Daftar Category';

        $search = $this->request->getVar('search');
        if ($search) {
            $data['category'] = $model->searching($search);
        } else {
            $data['category'] = $model->findAll();
        }

        return view('admin/CategoryView', $data);
    }
}
