<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CommentSeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i < 6; $i++) {
            $data = [
                'comment_date' => date('Y-m-d H:i:s'),
                'email' => "email_$i",
                'message' => "lorem ipsum",
                'status' => rand(1, 99),
                'comment_parent' => rand(1, 99),
                'id_post' => rand(1, 99),
                'image' => "image_$i",
                'updated_at' => date('Y-m-d H:i:s'),
            ];

            // using query builder
            $this->db->table('comment')->insert($data);
        }
    }
}
