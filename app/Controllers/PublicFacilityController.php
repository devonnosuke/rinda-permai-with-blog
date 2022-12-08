<?php

namespace App\Controllers;

use App\Controllers\BaseController;

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
}
