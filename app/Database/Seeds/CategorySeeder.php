◘<?php

    namespace App\Database\Seeds;

    use CodeIgniter\Database\Seeder;

    class CategorySeeder extends Seeder
    {
        public function run()
        {
            for ($i = 0; $i  < 6; $i++) {

                $data = [
                    'category_name'         => "category_$i",
                    'category_slug'        =>  "category-$i",
                    'created_at'    => date('Y-m-d H:i:s'),
                    'updated_at'    => date('Y-m-d H:i:s'),
                ];

                // using query builder
                $this->db->table('category')->insert($data);
            }
        }
    }


    ?>