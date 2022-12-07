<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PropertySeeder extends Seeder
{
    public function run()
    {
        helper('getid');
        for ($i = 0; $i  < 6; $i++) {

            $data = [
                'type_name' => "type_$i",
                'address'    => "address_jln.destik_$i",
                'post_number'    => "post_number_" . $i,
                'lt'    => rand(1, 99),
                'lb'    => rand(1, 99),
                'area'    => rand(1, 99),
                'bads'    => rand(1, 99),
                'baths'    => rand(1, 99),
                'garages'    => rand(1, 99),
                'description'    => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
                'aminities'    => "aminities_$i",
                'video'    => "video_$i",
                'img_card'    => "img_card_$i",
                'img_spec1'    => "img_spec_$i",
                'img_spec2'    => "img_spec2_$i",
                'id_property_spec'    => getRandId('property_spec', 'id_property_spec'),
                'id_property_gallery'    => getRandId('property_gallery', 'id_property_gallery'),
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ];

            // using query builder
            $this->db->table('property')->insert($data);
        }
    }
}
