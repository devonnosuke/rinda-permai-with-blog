<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AboutSeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i < 6; $i++) {
            $data = [
                'title'         => "$i-Ryanch",
                'subtitle'      => "$i-Ryanch@gmail.com",
                'description'   =>  rand(1, 99),
                'visi'          => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
                'misi'          => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
                'img_thumb'     => "$i-img-thumb",
                'img_profile'   => "$i-img-profile",
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ];
            // using query builder
            $this->db->table('about')->insert($data);
        }
    }
}
