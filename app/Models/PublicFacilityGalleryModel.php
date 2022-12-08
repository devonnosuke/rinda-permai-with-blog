<?php

namespace App\Models;

use CodeIgniter\Model;

class PublicFacilityGalleryModel extends Model
{
    protected $table            = 'public_facility_Gallery';
    protected $primaryKey       = 'id_public_facility_Gallery';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['image',];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
