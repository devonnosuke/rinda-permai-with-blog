<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Config\Services;

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
    public function add()
    {
        $data['title'] = ' Daftar Category';
        $data['validation'] = Services::validation();
        return view('admin/category-add', $data);
    }
    public function save($id = null)
    {
        $model = new \App\Models\CategoryModel();
        $data = $this->request->getVar();
        if ($id == true) {
            $data['id_category'] = $id;
        }

        $cek = $model->save($data);

        if ($cek == true) {
            return redirect()->to('/admin/category');
        }

        return "Gagal Disimpan!";
    }
}
