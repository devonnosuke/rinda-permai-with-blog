<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Config\Services;

class CategoryController extends BaseController
{
    public function index()
    {
        $model = new \App\Models\CategoryModel();
        $data['title'] = 'Daftar Category';

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
        $data['category_slug'] = url_title($this->request->getVar('category_name'), '-', true);
        $cek = $model->save($data);

        if ($cek == true) {
            return redirect()->to('/admin/category');
        }

        return "Gagal Disimpan!";
    }

    public function delete($id = null)
    {
        $model = new \App\Models\CategoryModel();

        $cek = $model->delete($id);
        if ($cek == true) {
            return redirect()->to('/admin/category');
        }
        return "Gagal Dihapus!";
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Category';
        $data['validation'] = Services::validation();
        $model = new \App\Models\CategoryModel();
        $data['category'] = $model->find($id);
        return view('/admin/category-edit', $data);
    }
}
