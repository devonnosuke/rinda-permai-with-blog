<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class TagsController extends BaseController
{
    public function index()
    {
        $model = new \App\Models\StudentModel();
        $data['title'] = 'Student List 📃';

        $search = $this->request->getVar('search');
        if ($search) {
            $data['students'] = $model->searching($search);
        } else {
            $data['students'] = $model->findAll();
        }

        return view('studentList', $data);
    }
}
