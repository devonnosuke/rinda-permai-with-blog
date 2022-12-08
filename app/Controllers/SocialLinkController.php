<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class SocialLinkController extends BaseController
{
    public function index()
    {
        $model = new \App\Models\SocialLinkModel();
        $data['title'] = ' Daftar SocialLink';

        $search = $this->request->getVar('search');
        if ($search) {
            $data['sociallink'] = $model->searching($search);
        } else {
            $data['sociallink'] = $model->findAll();
        }

        return view('admin/SocialLinkView', $data);
    }
}
