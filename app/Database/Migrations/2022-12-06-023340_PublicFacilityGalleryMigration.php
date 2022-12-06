<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PublicFacilityGalleryMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_public_facility_gallery' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_public_facility' => [
                'type'       => 'INT',
                'constraint' => '5',
            ],
            'image' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'NULL' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'NULL' => true,
            ],
        ]);
        $this->forge->addKey('id_public_facility_gallery', true);
        $this->forge->createTable('public_facility_gellery');
    }

    public function down()
    {
        $this->forge->dropTable('public_facility_gallery');
    }
}
