<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SocialLinkSeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i  < 6; $i++) {

            $data = [
                'type'         => "type_$i",
                'link'        =>  "link-$i",
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ];

            // using query builder
            $this->db->table('sociallink')->insert($data);
        }
    }
}
