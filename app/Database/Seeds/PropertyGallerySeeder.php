<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PropertyGallerySeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i < 6; $i++) {
            $data = [
                'id_property'   => getRandId('property', 'id_property'),
                'image'        => "$i-Image",
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')

            ];

            // using query builder
            $this->db->table('property_gallery')->insert($data);
        }
    }
}
