<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PropertyGalleryMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_property_gallery' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
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

        $this->forge->addKey('id_property_gallery', true);
        $this->forge->createTable('property_gallery');
    }

    public function down()
    {
        $this->forge->dropTable('property_gallery');
    }
}
