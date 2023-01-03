<?php

namespace App\Controllers;

use Config\Services;

class Home extends BaseController
{
    public function index()
    {
        $data['title'] = 'Home';
        $model = new \App\Models\PublicFacilityModel();

        $data['facility'] = $model->findAll();

        return view('home/home', $data);
    }

    public function about()
    {
        $data['title'] = 'About';
        return view('home/about', $data);
    }

    public function blog()
    {
        $data['title'] = 'Blog';

        $keyword = $this->request->getVar('cari');
        if ($keyword) {
            $data['title'] = "Pencarian Blog";
            $data['h1'] = "Hasil Pencarian: $keyword";
            return view('home/blog-search', $data);
        }
        return view('home/blog', $data);
    }

    public function blogDetail($slug = null)
    {
        $data['title'] = 'Judul Blog';
        return view('home/blog-detail', $data);
    }

    public function add()
    {
        $data['validation'] = Services::validation();
        return view('form-sample', $data);
    }

    public function tags($slug)
    {
        $data['title'] = "Seleksi Kategori";
        $data['h1'] = "Filter Berdasarkan Tag: $slug";
        return view('home/tags-detail', $data);
    }

    public function category($category)
    {
        $data['title'] = "Seleksi Kategori";
        $data['h1'] = "Filter Berdasarkan Kategori: $category";
        return view('home/category-detail', $data);
    }
}
