<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PublicFacilityGallerySeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i  < 6; $i++) {

            $data = [
                'id_public_facility'       =>  getRandId('public_facility', 'id_public_facility'),
                'image'                    =>  "$i-image",
                'created_at'               =>  date('Y-m-d H:i:s'),
                'updated_at'               =>  date('Y-m-d H:i:s'),
            ];

            // using query builder
            $this->db->table('public_facility_gallery')->insert($data);
        }
    }
}
