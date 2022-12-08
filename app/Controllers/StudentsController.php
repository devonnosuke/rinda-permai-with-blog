<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Config\Services;

class StudentsController extends BaseController
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

    public function add()
    {
        $data['title'] = 'Student Add ➕';
        $data['validation'] = Services::validation();
        return view('studentAdd', $data);
    }

    public function edit($id)
    {
        $data['title'] = 'Student Edit ✏️';
        $model = new \App\Models\StudentModel();
        $data['students'] =  $model->find($id);
        return view('studentEdit', $data);
    }

    public function save($id = null, $pictemp = false)
    {
        $studentValidation = new \App\Validation\StudentValidation;
        $rules = $studentValidation->rules;
        if (!$this->validate($rules)) {
            return redirect()->back()->withInput();
        }

        $model = new \App\Models\StudentModel();
        $data = $this->request->getVar();
        if ($id == true) {
            $data['student_id'] = $id;
        }

        $pic = $this->request->getFile('student_pic');

        if (!$pic->hasMoved() == $pic->isValid()) {
            ($pictemp && $pictemp != 'nopic.png') ? unlink("pic/" . $pictemp) : '';
            if (!$pic->move('pic/')) {
                return $pic->hasMoved();
            }
            $data['student_pic'] = $pic->getName();
        }

        $cek = $model->save($data);

        if ($cek == true) {
            // return "Berhasil disimpan!";
            return redirect()->to('/');
        }

        return "Gagal Disimpan";
    }

    public function delete($id = null)
    {
        $model = new \App\Models\StudentModel();

        $namaFoto = $model->find($id);
        $namaFoto = $namaFoto['student_pic'];

        $cek = $model->delete($id);
        if ($cek ==  true) {
            ($namaFoto != 'nopic.png') ? unlink("pic/" . $namaFoto) : '';
            return redirect()->to('/');
        }

        return "Gagal Dihapus!";
    }
}
