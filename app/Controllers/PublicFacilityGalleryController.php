<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PublicFacilityGalleryController extends BaseController
{
    public function index()
    {
        $model = new \App\Models\PublicFacilityGalleryModel();
        $data['title'] = 'Daftar Public Facility Gallery';

        return view('PublicFacilityGalleryView', $data);
    }
}
