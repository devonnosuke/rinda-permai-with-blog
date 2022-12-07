<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CommentSeeder extends Seeder
{
    public function run()
    {
        helper('getid');
        for ($i = 0; $i < 6; $i++) {
            $data = [
                'comment_date' => date('Y-m-d H:i:s'),
                'email' => "$i.email@gmail.com",
                'message' => "lorem ipsum dolor sit amet",
                'status' => rand(0, 1),
                'comment_parent' => rand(1, 99),
                'id_post' => getRandId('post', 'id_post'),
                'image' => "image_$i",
                'updated_at' => date('Y-m-d H:i:s'),
            ];

            // using query builder
            $this->db->table('comment')->insert($data);
        }
    }
}
