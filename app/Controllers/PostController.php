<?php

namespace App\Controllers;

use App\Controllers\BaseController;

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
}
