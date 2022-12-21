<?php

namespace App\Models;

use CodeIgniter\Model;

class CommentModel extends Model
{
    protected $table            = 'comment';
    protected $primaryKey       = 'id_comment';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['email', 'message', 'status', 'comment_parent', 'id_post', 'image'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'comment_date';
    protected $updatedField  = 'updated_at';

    public function searching($search)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->select('*');
        $builder->like('comment_date', $search);
        $builder->orLike('message', $search);
        $builder->orLike('status', $search);
        return $builder->get()->getResultArray();
    }

    public function getComment()
    {
        $db = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->select('id_comment, email, message, status, comment_date, comment_parent, comment.id_post, comment.image, post_slug');
        $builder->join('post', "post.id_post = $this->table.id_post");
        return $builder->get()->getResultArray();
    }
}
