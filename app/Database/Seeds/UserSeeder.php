<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i  < 6; $i++) {

            $data = [
                'username'      => "$i-Ryanch",
                'password'      => "ryanch",
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ];

            // using query builder
            $this->db->table('user')->insert($data);
        }
    }
}
