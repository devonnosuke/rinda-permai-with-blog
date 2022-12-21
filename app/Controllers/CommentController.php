<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Config\Services;

class CommentController extends BaseController
{
    public function index()
    {
        $model = new \App\Models\CommentModel();
        $data['title'] = 'Daftar Comment📃';

        $search = $this->request->getVar('search');
        if ($search) {
            $data['comment'] = $model->searching($search);
        } else {
            $data['comment'] = $model->getComment();
            // dd($data['comment']);
        }

        return view('admin/CommentView', $data);
    }

    public function add()
    {
        $data['title'] = 'Tambah Comment📃';
        $data['validation'] = Services::validation();
        return view('admin/comment-add', $data);
    }

    public function save($id = null)
    {
        $model = new \App\Models\CommentModel();
        $data = $this->request->getVar();
        $data['status'] = intval($data['status']);
        // dd($data);
        if ($id == true) {
            $data['id_comment'] = $id;
        }
        $cek = $model->save($data);

        if ($cek == true) {
            return redirect()->to('/admin/comment');
        }

        return "Gagal Disimpan";
    }

    public function delete($id = null)
    {
        $model = new \App\Models\CommentModel();

        $cek = $model->delete($id);
        if ($cek == true) {
            return redirect()->to('/admin/comment');
        }
        return "Gagal Dihapus!";
    }
}
