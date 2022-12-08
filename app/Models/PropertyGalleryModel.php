<?php

namespace App\Models;

use CodeIgniter\Model;

class PropertyGalleryModel extends Model
{
    protected $table            = 'property_gallery';
    protected $primaryKey       = 'id_property_galllery';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['image'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
