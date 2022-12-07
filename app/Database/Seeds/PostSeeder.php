<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i < 6; $i++) {

            $data = [
                'title'             => "$i-Lorem Ipsum Dolor Sit Amet",
                'description'       => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis, illum nesciunt? Quas at illum minus.",
                'content'           => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam, tenetur.",
                'image'             => "$i-Image",
                'post_date'         => date('Y-m-d H:i:s'),
                'post_last_update'  => date('Y-m-d H:i:s'),
                'id_category'       => getRandId('category', 'id_category'),
                'post_tags'         => "Tags-$i",
                'post_slug'         => "$i-lorem-ipsum-dolor-sit-amet",
                'post_status'       => rand(0, 1),
                'post_views'        => rand(1, 999),
                'id_user'           => getRandId('user', 'id_user'),
            ];

            // using query builder
            $this->db->table('post')->insert($data);
        }
    }
}
