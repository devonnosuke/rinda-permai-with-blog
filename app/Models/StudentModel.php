<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
    protected $table            = 'students';
    protected $primaryKey       = 'student_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['student_name', 'student_gender', 'student_address', 'student_class', 'student_pic'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function searching($search)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->select('*');
        $builder->like('student_name', $search);
        $builder->orLike('student_address', $search);
        $builder->orLike('student_class', $search);
        return $builder->get()->getResultArray();
    }
}
