<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Config\Services;

class TagsController extends BaseController
{
    public function index()
    {
        $model = new \App\Models\TagsModel();
        $data['title'] = 'Daftar Tags📃';

        $search = $this->request->getVar('search');
        if ($search) {
            $data['tags'] = $model->searching($search);
        } else {
            $data['tags'] = $model->findAll();
        }

        return view('admin/TagsView', $data);
    }

    public function add()
    {
        $data['title'] = 'Tambah Tags📃';
        $data['validation'] = Services::validation();
        return view('admin/tags-add', $data);
    }

    public function save($id = null)
    {
        $model = new \App\Models\TagsModel();
        $data = $this->request->getVar();
        if ($id == true) {
            $data['id_tag'] = $id;
        }

        $cek = $model->save($data);

        if ($cek == true) {
            return redirect()->to('/admin/tags');
        }

        return "Gagal Disimpan!";
    }

    public function delete($id = null)
    {
        $model = new \App\Models\TagsModel();

        $cek = $model->delete($id);
        if ($cek == true) {
            return redirect()->to('/admin/tags');
        }
        return "Gagal Dihapus!";
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Tags';
        $data['validation'] = Services::validation();
        $model = new \App\Models\TagsModel();
        $data['tags'] = $model->find($id);
        return view('/admin/tags-edit', $data);
    }
}
