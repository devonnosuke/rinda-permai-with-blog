<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CommentController extends BaseController
{
    public function index()
    {
        $model = new \App\Models\TagsModel();
        $data['title'] = 'Daftar Comment📃';

        $search = $this->request->getVar('search');
        if ($search) {
            $data['comment'] = $model->searching($search);
        } else {
            $data['comment'] = $model->findAll();
        }

        return view('admin/CommentView', $data);
    }
}
