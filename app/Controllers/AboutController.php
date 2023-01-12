<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Config\Services;

class AboutController extends BaseController
{

    public function index()
    {
        $model = new \App\Models\AboutModel();
        $data['title'] = 'Daftar About 📃';


        $data['About'] = $model->findAll();

        return view('admin/AboutView', $data);
    }
    public function add()
    {
        $data['title'] = 'Tambah About📑';
        $data['validation'] = Services::validation();
        return view('admin/about-add', $data);
    }
    public function save($id = null)
    {
        $model = new \App\Models\AboutModel();
        $data = $this->request->getVar();
        if ($id == true) {
            $data['id_about'] = $id;
        }

        $cek = $model->save($data);

        if ($cek == true) {
            return redirect()->to('/admin/about');
        }
        return "Gagal Disimpan!";
    }
    public function delete($id = null)
    {
        $model = new \App\Models\AboutModel();
        $cek = $model->delete($id);
        if ($cek == true) {
            return redirect()->to('/admin/about');
        }
        return "Gagal Dihapus!";
    }
    public function edit($id)
    {
        $data['title'] = 'Edit About';
        $data['validation'] = Services::validation();
        $model = new \App\Models\AboutModel();
        $data['about'] = $model->find($id);
        return view('/admin/about-edit', $data);
    }
}
