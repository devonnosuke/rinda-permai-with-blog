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
        $builder->select('*');
        $builder->like('title', $search);
        return $builder->get()->getResultArray();
    }

    public function getPost()
    {
        $db = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->select('id_post, title, description, content, image, post.id_category, post_tags, post_slug, post_status, post_views, post.id_user, post_last_update, category.category_name, username');
        $builder->join('category', "category.id_category = $this->table.id_category");
        $builder->join('user', "user.id_user = $this->table.id_user");
        return $builder->get()->getResultArray();
    }
}
