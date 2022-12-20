<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Config\Services;

class PropertyController extends BaseController
{
    public function index()
    {
        $model = new \App\Models\PropertyModel();
        $data['title'] = 'Daftar Property';

        $search = $this->request->getVar('search');
        if ($search) {
            $data['property'] = $model->searching($search);
        } else {
            $data['property'] = $model->findAll();
        }

        return view('admin/PropertyView', $data);
    }

    public function add()
    {
        $data['validation'] = Services::validation();
        return view('admin/add-property', $data);
    }

    public function save($id = null)
    {
        $model = new \App\Models\PropertyModel();
        $data = $this->request->getVar();
        if ($id == true) {
            $data['id_property'] = $id;
        }

        $cek = $model->save($data);

        if ($cek == true) {
            return redirect()->to('/admin/property');
        }

        return "Gagal Disimpan!";
    }

    public function delete($id = null)
    {
        $model = new \App\Models\PropertyModel();

        // $namaFoto = $model->find($id);
        // $namaFoto = $namaFoto['student_pic'];

        $cek = $model->delete($id);
        if ($cek == true) {
            // ($namaFoto != 'nopic.png') ? unlink("pic/" . $namaFoto) : '';
            return redirect()->to('/admin/property');
        }

        return "Gagal Dihapus!";
    }
}
