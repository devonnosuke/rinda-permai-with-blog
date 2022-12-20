<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Config\Services;

class PublicFacilityController extends BaseController
{
    public function index()
    {
        $model = new \App\Models\PublicFacilityModel();
        $data['title'] = 'Daftar Public Facility';

        $search = $this->request->getVar('search');
        if ($search) {
            $data['PublicFacility'] = $model->searching($search);
        } else {
            $data['PublicFacility'] = $model->findAll();
        }

        return view('admin/PublicFacilityView', $data);
    }

    public function add()
    {
        $data['title'] = 'Tambah Public Facility';
        $data['validation'] = Services::validation();
        return view('admin/public-facility-add', $data);
    }

    public function save($id = null)
    {
        $model = new \App\Models\PublicFacilityModel();
        $data = $this->request->getVar();
        if ($id == true) {
            $data['id_public_facility'] = $id;
        }
        $cek = $model->save($data);

        if ($cek == true) {
            return redirect()->to('/admin/public-facility');
        }

        return "Gagal Disimpan!";
    }
}
