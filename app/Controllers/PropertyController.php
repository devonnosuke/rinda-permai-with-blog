<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Config\Services;

class PropertyController extends BaseController
{
    public function index()
    {
        $model = new \App\Models\PropertyModel();
        $data['title'] = 'Daftar Property';

        $search = $this->request->getVar('search');
        if ($search) {
            $data['property'] = $model->searching($search);
        } else {
            $data['property'] = $model->getProperty();
        }

        return view('admin/PropertyView', $data);
    }

    public function add()
    {
        $data['validation'] = Services::validation();
        $data['title'] = 'Daftar Property';

        return view('admin/add-property', $data);
    }

    public function save($id = null)
    {
        $model = new \App\Models\PropertyModel();
        $data = $this->request->getVar();
        // dd($data);
        if ($id == true) {
            $data['id_property'] = $id;
        }

        $dataFoto = $model->find($id);
        // dd($dataFoto);
        // dd($dataFoto['img_card']);

        $img_card = $this->request->getFile('img_card');

        // dd(!$img_card->hasMoved());
        // dd(!$img_card->hasMoved());
        if (!$img_card->hasMoved() == $img_card->isValid()) {

            if ($id) {
                ($dataFoto['img_card'] && $dataFoto['img_card'] != 'coming-soon.png') ? unlink("img/property/" . $dataFoto['img_card']) : '';
            }

            if (!$img_card->move('img/property/')) {
                return $img_card->hasMoved();
            }
            $data['img_card'] = $img_card->getName();
        }

        $img_spec1 = $this->request->getFile('img_spec1');

        if (!$img_spec1->hasMoved() == $img_spec1->isValid()) {
            if ($id) {
                ($dataFoto['img_spec1'] && $dataFoto['img_spec1'] != 'coming-soon.png') ? unlink("img/property/" . $dataFoto['img_spec1']) : '';
            }
            if (!$img_spec1->move('img/property/')) {
                return $img_spec1->hasMoved();
            }
            $data['img_spec1'] = $img_spec1->getName();
        }

        $img_spec2 = $this->request->getFile('img_spec2');

        if (!$img_spec2->hasMoved() == $img_spec2->isValid()) {
            if ($id) {
                ($dataFoto['img_spec2'] && $dataFoto['img_spec2'] != 'coming-soon.png') ? unlink("img/property/" . $dataFoto['img_spec2']) : '';
            }
            if (!$img_spec2->move('img/property/')) {
                return $img_spec2->hasMoved();
            }
            $data['img_spec2'] = $img_spec2->getName();
        }

        $cek = $model->save($data);

        if ($cek == true) {

            $proSpecModel = new \App\Models\PropertySpecModel();

            $dataSpec['specification'] = $this->request->getVar('property_spec');
            $dataSpec['id_property'] = getLastId();

            $cek = $proSpecModel->save($dataSpec);

            if ($cek == true) {
                return redirect()->to('/admin/property');
            }
        }



        return "Gagal Disimpan!";
    }

    public function delete($id = null)
    {
        $model = new \App\Models\PropertyModel();

        // $namaFoto = $model->find($id);
        // $namaFoto = $namaFoto['student_pic'];
        $namaFoto = $model->find($id);
        // dd($namaFoto);
        $cek = $model->delete($id);

        if ($cek == true) {
            // ($namaFoto != 'nopic.png') ? unlink("pic/" . $namaFoto) : '';
            ($namaFoto['img_card'] != 'coming-soon.jpg') ? unlink("img/post/" . $namaFoto['img_card']) : '';
            ($namaFoto['img_spec1'] != 'coming-soon.jpg') ? unlink("img/post/" . $namaFoto['img_spec1']) : '';
            ($namaFoto['img_spec2'] != 'coming-soon.jpg') ? unlink("img/post/" . $namaFoto['img_spec2']) : '';
            return redirect()->to('/admin/property');
        }


        return "Gagal Dihapus!";
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Property';
        $data['validation'] = Services::validation();
        $model = new \App\Models\PropertyModel();
        $data['property'] = $model->findProperty($id);
        return view('/admin/edit-property', $data);
    }
}
