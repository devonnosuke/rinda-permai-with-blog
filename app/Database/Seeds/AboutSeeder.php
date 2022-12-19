<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AboutSeeder extends Seeder
{
    public function run()
    {
        // for ($i = 0; $i < 6; $i++) {
        $data = [
            'title'         => "Ryanch",
            'subtitle'      => "Ryanch Dolor Sit Amet",
            'description'   => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            'visi'          => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            'misi'          => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            'img_thumb'     => "coming-soon.jpg",
            'img_profile'   => "coming-soon.jpg",
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ];
        // using query builder
        $this->db->table('about')->insert($data);
        // }
    }
}
