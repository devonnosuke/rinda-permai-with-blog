<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Config\Services;

class PostController extends BaseController
{
    public function index()
    {
        $model = new \App\Models\PostModel();
        $data['title'] = 'Daftar Post';

        $search = $this->request->getVar('search');
        if ($search) {
            $data['post'] = $model->searching($search);
        } else {
            $data['post'] = $model->getPost();
        }

        return view('admin/PostView', $data);
    }

    public function Add()
    {
        $data['title'] = 'Tambah Post';
        $data['validation'] = Services::validation();
        return view('admin/post-add', $data);
    }

    public function save($id = null, $pictemp = false)
    {
        $model = new \App\Models\PostModel();
        $data = $this->request->getVar();
        if ($id == true) {
            $data['id_post'] = $id;
        }

        $pic = $this->request->getFile('image');

        if (!$pic->hasMoved() == $pic->isValid()) {
            ($pictemp && $pictemp != 'coming-soon.png') ? unlink("img/post/" . $pictemp) : '';
            if (!$pic->move('img/post/')) {
                return $pic->hasMoved();
            }
            $data['image'] = $pic->getName();
        }

        $data['post_slug'] = url_title($this->request->getVar('title'), '-', true);
        $cek = $model->save($data);

        if ($cek == true) {
            return redirect()->to('/admin/post');
        }

        return "Gagal Disimpan!";
    }

    public function delete($id = null)
    {
        $model =  new \App\Models\PostModel();

        $namaFoto = $model->find($id);
        $namaFoto = $namaFoto['image'];

        $cek = $model->delete($id);
        if ($cek == true) {
            ($namaFoto != 'coming-soon.png') ? unlink("img/post/" . $namaFoto) : '';
            return redirect()->to('/admin/post');
        }
        return "Gagal Dihapus!";
    }
}
