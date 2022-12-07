<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PublicFacilitySeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i  < 6; $i++) {

            $data = [
                'name'              => "$i-name",
                'description'       =>  "Lorem ipsum dolor si t amet consectetur adipisicing elit.",
                'icon'              =>  "$i-icon.png",
                'created_at'        =>  date('Y-m-d H:i:s'),
                'updated_at'        =>  date('Y-m-d H:i:s'),
            ];

            // using query builder
            $this->db->table('public_facility')->insert($data);
        }
    }
}
