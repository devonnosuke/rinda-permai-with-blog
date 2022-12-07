<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i < 6; $i++) {

            $data = [
                'title'             => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, dolore!",
                'description'       => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis, illum nesciunt? Quas at illum minus.",
                'content'           => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam, tenetur.",
                'image'             => "$i-Image",
                'post_date'         => date('Y-m-d H:i:s'),
                'post_last_update'  => date('Y-m-d H:i:s'),
                'id_category'       => getRandId('category', 'id_category'),
                'post_tags'         => "Lorem ipsum dolor sit amet.",
                'post_slug'         => "Lorem ipsum dolor sit amet.",
                'post_status'       => rand(1, 99),
                'post_views'        => rand(1, 99),
                'id_user'           => getRandId('user', 'id_user'),
            ];

            // using query builder
            $this->db->table('post')->insert($data);
        }
    }
}
