<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Config\Services;

class ContactController extends BaseController
{

    public function index()
    {
        $model = new \App\Models\ContactModel();
        $data['title'] = 'Daftar Contact 📃';


        $data['contact'] = $model->findAll();

        return view('admin/ContactView', $data);
    }
    public function edit($id)
    {
        $data['title'] = 'Edit Contact';
        $data['validation'] = Services::validation();
        $model = new \App\Models\ContactModel();
        $data['contact'] = $model->find($id);
        return view('/admin/contact-edit', $data);
    }
    public function save($id = null)
    {
        $model = new \App\Models\ContactModel();
        $data = $this->request->getVar();
        if ($id == true) {
            $data['id_contact'] = $id;
        }

        $cek = $model->save($data);

        if ($cek == true) {
            return redirect()->to('/admin/contact');
        }

        return "Gagal Disimpan!";
    }
}
