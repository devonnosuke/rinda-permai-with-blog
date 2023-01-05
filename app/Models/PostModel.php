<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
    protected $table            = 'post';
    protected $primaryKey       = 'id_post';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['title', 'description', 'content', 'image', 'id_category', 'post_tags', 'post_slug', 'post_status', 'post_views', 'id_user'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'post_date';
    protected $updatedField  = 'post_last_update';

    public function searching($search)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table($this->table);
        // $builder->select('*');
        $builder->select('id_post, title, description, content, image, post.id_category, post_tags, post_slug, post_status, post_views, post.id_user, post_date, post_last_update, category.category_name, username');
        $builder->join('category', "category.id_category = $this->table.id_category");
        $builder->join('user', "user.id_user = $this->table.id_user");
        $builder->like('title', $search);
        $builder->orlike('post_tags', $search);
        return $builder->get()->getResultArray();
    }

    public function getPost()
    {
        $db = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->select('id_post, title, description, content, image, post.id_category, post_tags, post_slug, post_status, post_views, post.id_user, post_date, post_last_update, category.category_name, username');
        $builder->join('category', "category.id_category = $this->table.id_category");
        $builder->join('user', "user.id_user = $this->table.id_user");
        return $builder->get()->getResultArray();
    }

    public function editPost($id)
    {
        $db = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->select('id_post, title, description, content, image, post.id_category, post_tags, post_slug, post_status, post_views, post.id_user, post_last_update, category.category_name, username');
        $builder->join('category', "category.id_category = $this->table.id_category");
        $builder->join('user', "user.id_user = $this->table.id_user");
        $builder->where('id_post', $id);
        return $builder->get()->getResultArray();
    }

    public function getBySlug($slug)
    {
        $db = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->select('id_post, title, description, content, image, post.id_category, post_tags, post_slug, post_status, post_views, post.id_user, post_date, post_last_update, category.category_name, username');
        $builder->join('category', "category.id_category = $this->table.id_category");
        $builder->join('user', "user.id_user = $this->table.id_user");
        $builder->where('post_slug', $slug);
        return $builder->get()->getResultArray();
    }

    public function getByTags($tags)
    {
        $db = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->select('id_post, title, description, content, image, post.id_category, post_tags, post_slug, post_status, post_views, post.id_user, post_date, post_last_update, category.category_name, username');
        $builder->join('category', "category.id_category = $this->table.id_category");
        $builder->join('user', "user.id_user = $this->table.id_user");
        $builder->like('post.post_tags', $tags);

        return $builder->get()->getResultArray();
    }
    public function getByCategory($categorySlug)
    {
        $db = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->select('id_post, title, description, content, image, post.id_category, post_tags, post_slug, post_status, post_views, post.id_user, post_date, post_last_update, category.category_name, username');
        $builder->join('category', "category.id_category = $this->table.id_category");
        $builder->join('user', "user.id_user = $this->table.id_user");
        $builder->like('category.category_slug', $categorySlug);

        return $builder->get()->getResultArray();
    }
}
