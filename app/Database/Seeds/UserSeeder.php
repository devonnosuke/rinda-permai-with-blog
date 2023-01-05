<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        // password asli [`RiaN2020`]
        $data = [
            'username'      => "rian-ryaldi",
            'password'      => "21635906b2fa78f4ec7c2d646a443b1f",
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ];

        // using query builder
        $this->db->table('user')->insert($data);
    }
}
