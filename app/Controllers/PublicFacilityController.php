<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Config\Services;
use PhpParser\Node\Stmt\Return_;

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

        $imagefile = $this->request->getFiles();

        if ($id == true) {
            $data['id_public_facility'] = $id;
        }
        $cek = $model->save($data);

        $id_public_facility = getLastId();
        if ($cek == true) {
            if ($imagefile) {
                foreach ($imagefile['image'] as $img) {
                    if ($img->isValid() && !$img->hasMoved()) {

                        $newName = $img->getRandomName();
                        $img->move('img/public_facility_gallery', $newName);

                        $dataGallery['id_public_facility'] = $id_public_facility;
                        $dataGallery['image'] = $newName;

                        $modelPFG = new \App\Models\PublicFacilityGalleryModel();
                        $modelPFG->save($dataGallery);
                    }
                }
            }
            return redirect()->to('/admin/public-facility');
        }

        return "Gagal Disimpan!";
    }
    public function delete($id = null)
    {
        $model = new \App\Models\PublicFacilityModel();

        // $namaFoto = $model->find($id);
        // $namaFoto = $namaFoto['student_pic'];

        $cek = $model->delete($id);
        if ($cek == true) {
            // ($namaFoto != 'nopic.png') ? unlink("pic/" . $namaFoto) : '';
            return redirect()->to('/admin/public-facility');
        }

        return "Gagal Dihapus!";
    }
    public function edit($id)
    {
        $data['title'] = 'Edit Public Facility';
        $data['validation'] = Services::validation();
        $model = new \App\Models\PublicFacilityModel();
        $data['public_facility'] = $model->find($id);
        return view('/admin/public-facility-edit', $data);
    }
}
