<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Config\Services;

class SocialLinkController extends BaseController
{
    public function index()
    {
        $model = new \App\Models\SocialLinkModel();
        $data['title'] = 'Social Link';

        $search = $this->request->getVar('search');
        if ($search) {
            $data['sociallink'] = $model->searching($search);
        } else {
            $data['sociallink'] = $model->findAll();
        }

        return view('admin/SocialLinkView', $data);
    }

    public function add()
    {
        $data['title'] = ' Daftar Sociallink';
        $data['validation'] = Services::validation();
        return view('admin/sociallink-add', $data);
    }
    public function save($id = null)
    {
        $model = new \App\Models\SocialLinkModel();
        $data = $this->request->getVar();
        if ($id == true) {
            $data['id_socialLink'] = $id;
        }

        $cek = $model->save($data);

        if ($cek == true) {
            return redirect()->to('/admin/sociallink');
        }

        return "Gagal Disimpan!";
    }

    public function delete($id = null)
    {
        $model = new \App\Models\SocialLinkModel();

        $cek = $model->delete($id);
        if ($cek == true) {
            return redirect()->to('/admin/sociallink');
        }
        return "Gagal Dihapus!";
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Sociallink';
        $data['validation'] = Services::validation();
        $model = new \App\Models\SocialLinkModel();
        $data['sociallink'] = $model->find($id);
        return view('/admin/sociallink-edit', $data);
    }
}
