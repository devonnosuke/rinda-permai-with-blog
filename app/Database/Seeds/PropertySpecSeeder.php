<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PropertySpecSeeder extends Seeder
{
    public function run()
    {
        helper('getid');
        for ($i = 0; $i < 6; $i++) {
            $data = [
                'id_property'        => getRandId('property', 'id_property'),
                'specification'   => "$i, Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, atque.",
                'created_at'      => date('Y-m-d H:i:s'),
                'updated_at'      => date('Y-m-d H:i:s')
            ];

            // using query builder
            $this->db->table('property_spec')->insert($data);
        }
    }
}
