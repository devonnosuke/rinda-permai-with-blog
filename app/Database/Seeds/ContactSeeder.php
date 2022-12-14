<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ContactSeeder extends Seeder
{
    public function run()
    {
        // for ($i = 0; $i < 6; $i++) {
        $data = [
            'email'            => "Ryanch@gmail.com",
            'phone'            => "088888888888",
            'name_residence'   => "Residence",
            'address'          => "address no, city 19221",
            'created_at'       => date('Y-m-d H:i:s'),
            'updated_at'       => date('Y-m-d H:i:s'),
        ];
        // using query builder
        $this->db->table('contact')->insert($data);
        // }
    }
}
