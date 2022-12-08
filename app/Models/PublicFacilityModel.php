<?php

namespace App\Models;

use CodeIgniter\Model;

class PublicFacilityModel extends Model
{
    protected $table            = 'public_facility';
    protected $primaryKey       = 'id_public_facility';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['name', 'description', 'icon'];

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
        $builder->like('name', $search);
        $builder->orLike('description', $search);
        return $builder->get()->getResultArray();
    }
}
