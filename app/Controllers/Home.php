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

        $linkmodel = new \App\Models\sociallinkModel();
        $data['link'] = $linkmodel->findAll();

        $propertymodel = new \App\Models\propertyModel();
        $data['property'] = $propertymodel->findAll();
        return view('home/home', $data);
    }

    public function about()
    {
        $data['title'] = 'About';

        $linkmodel = new \App\Models\sociallinkModel();
        $data['link'] = $linkmodel->findAll();

        return view('home/about', $data);
    }

    public function blog()
    {
        $model = new \App\Models\PostModel();
        $data['title'] = 'Blog';

        $linkmodel = new \App\Models\sociallinkModel();
        $data['link'] = $linkmodel->findAll();

        $categorymodel = new \App\Models\CategoryModel();
        $data['category'] = $categorymodel->findAll();


        $keyword = $this->request->getVar('cari');
        if ($keyword) {
            $data['title'] = "Pencarian Blog";
            $data['h1'] = "Hasil Pencarian: $keyword";
            $data['post'] = $model->searching($keyword);
            return view('home/blog-search', $data);
        } else {
            $data['post'] = $model->getPost();
        }
        return view('home/blog', $data);
    }

    public function blogDetail($slug = null)
    {
        $model = new \App\Models\PostModel();
        $data['post'] = $model->getBySlug($slug);
        $data['title'] = 'Judul Blog';


        $tags = explode(',', $data['post'][0]['post_tags']);
        $data['tags'] = $tags;
        $linkmodel = new \App\Models\sociallinkModel();
        $data['link'] = $linkmodel->findAll();

        $commentModel = new \App\Models\commentModel();
        $data['comment'] = $commentModel->getCommentbyslug($slug);

        $categorymodel = new \App\Models\CategoryModel();
        $data['category'] = $categorymodel->findAll();

        return view('home/blog-detail', $data);
    }

    public function add()
    {
        $data['validation'] = Services::validation();
        $linkmodel = new \App\Models\sociallinkModel();
        $data['link'] = $linkmodel->findAll();

        return view('form-sample', $data);
    }

    public function tags($tags)
    {
        $data['title'] = "Seleksi Tag";
        $data['h1'] = "Filter Berdasarkan Tag: $tags";

        $linkmodel = new \App\Models\sociallinkModel();
        $data['link'] = $linkmodel->findAll();

        $postmodel = new \App\Models\PostModel();
        $data['post'] = $postmodel->getByTags($tags);

        $categorymodel = new \App\Models\CategoryModel();
        $data['category'] = $categorymodel->findAll();

        return view('home/tags-detail', $data);
    }

    public function category($category)
    {
        $data['title'] = "Seleksi Kategori";
        $data['h1'] = "Filter Berdasarkan Kategori: $category";

        $postmodel = new \App\Models\PostModel();
        $data['post'] = $postmodel->getByCategory($category);

        $categorymodel = new \App\Models\CategoryModel();
        $data['category'] = $categorymodel->findAll();

        $linkmodel = new \App\Models\sociallinkModel();
        $data['link'] = $linkmodel->findAll();

        return view('home/category-detail', $data);
    }
    public function propertyGrid()
    {
        $data['title'] = "List Property";
        $propertymodel = new \App\Models\propertyModel();
        $data['property'] = $propertymodel->findAll();

        $linkmodel = new \App\Models\sociallinkModel();
        $data['link'] = $linkmodel->findAll();

        return view('home/propertyGrid', $data);
    }

    public function propertyDetail($id)
    {
        $data['title'] = "Detail Property";

        $linkmodel = new \App\Models\sociallinkModel();
        $data['link'] = $linkmodel->findAll();

        $specmodel = new \App\Models\PropertySpecModel();
        $data['spec'] = $specmodel->findByIdPro($id);

        $propertymodel = new \App\Models\propertyModel();
        $data['property'] = $propertymodel->find($id);

        return view('home/property-single', $data);
    }
}
