<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run()
    {
        helper('getid');
        for ($i = 0; $i < 6; $i++) {

            $data = [
                'title'             => "Judul Post ke-$i",
                'description'       => "Deskirpsi-$i, sit amet consectetur adipisicing elit. Facilis, illum nesciunt? Quas at illum minus.",
                'content'           => "Lorem-$i ipsum dolor sit, amet consectetur adipisicing elit. Ipsam, tenetur.",
                'image'             => "coming-soon.jpg",
                'post_date'         => date('Y-m-d H:i:s'),
                'post_last_update'  => date('Y-m-d H:i:s'),
                'id_category'       => getRandId('category', 'id_category'),
                'post_tags'         => "Ini-Tag-$i",
                'post_slug'         => "judul-post-ke-$i",
                'post_status'       => rand(0, 1),
                'post_views'        => rand(1, 999),
                'id_user'           => getRandId('user', 'id_user'),
            ];

            // using query builder
            $this->db->table('post')->insert($data);
        }
    }
}
