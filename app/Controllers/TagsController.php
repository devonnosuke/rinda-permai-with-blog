<?php

namespace App\Controllers;

use App\Controllers\BaseController;

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
}
