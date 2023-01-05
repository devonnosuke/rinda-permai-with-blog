<?php

namespace App\Models;

use CodeIgniter\Model;

class PropertyModel extends Model
{
    protected $table            = 'property';
    protected $primaryKey       = 'id_property';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['type_name', 'address', 'post_number', 'lt', 'lb', 'area', 'bads', 'baths', 'garages', 'description', 'aminities', 'video', 'img_card', 'img_spec1', 'img_spec2'];

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
        $builder->like('type_name', $search);
        $builder->orLike('address', $search);
        return $builder->get()->getResultArray();
    }

    public function getProperty()
    {
        $db = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->select('property.id_property, type_name, address, post_number, lt, lb, area, bads, baths, garages, description, aminities, video, img_card, img_spec1, img_spec2, specification');
        $builder->join('property_spec', "property_spec.id_property = $this->table.id_property");
        return $builder->get()->getResultArray();
    }

    public function findProperty($id)
    {
        $db = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->select('property.id_property, type_name, address, post_number, lt, lb, area, bads, baths, garages, description, aminities, video, img_card, img_spec1, img_spec2, specification');
        $builder->join('property_spec', "property_spec.id_property = $this->table.id_property");
        $builder->where('property.id_property', $id);

        return $builder->get()->getResultArray();
    }
}
