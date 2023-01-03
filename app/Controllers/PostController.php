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

        $categoryModel = new \App\Models\CategoryModel();
        $tagsModel = new \App\Models\TagsModel();
        $data['category'] = $categoryModel->findAll();
        $data['tags'] = $tagsModel->findAll();

        return view('admin/post-add', $data);
    }

    public function save($id = null, $pictemp = false)
    {
        $model = new \App\Models\PostModel();
        $data = $this->request->getVar();
        $data['id_user'] = session()->get('id_user');
        $data['image'] = 'coming-soon.jpg';

        if (!$id) {
            $data['post_tags'] = null;
            $tags = $this->request->getVar('post_tags');
            $data['post_tags'] = implode(',', $tags);
        }

        // dd($data);
        if ($id == true) {
            $data['id_post'] = $id;
        }

        $pic = $this->request->getFile('image');

        if (!$pic->hasMoved() == $pic->isValid()) {
            ($pictemp && $pictemp != 'coming-soon.jpg') ? unlink("img/post/" . $pictemp) : '';
            if (!$pic->move('img/post/')) {
                return $pic->hasMoved();
            }
            $data['image'] = $pic->getName();
        }

        $data['post_slug'] = url_title($this->request->getVar('title'), '-', true);
        //dd($data);
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
            ($namaFoto != 'coming-soon.jpg') ? unlink("img/post/" . $namaFoto) : '';
            return redirect()->to('/admin/post');
        }
        return "Gagal Dihapus!";
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Post';
        $data['validation'] = Services::validation();

        $model = new \App\Models\PostModel();
        $categoryModel = new \App\Models\CategoryModel();


        $data['post'] = $model->editPost($id);
        $data['category'] = $categoryModel->findAll();
        return view('/admin/post-edit', $data);
    }
}
