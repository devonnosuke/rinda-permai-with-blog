<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PublicFacilityMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_public_facility' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'description' => [
                'type' => 'VARCHAR',
                'constraint' => '650',
            ],
            'icon' => [
                'type' => 'VARCHAR',
                'constraint' => '75',
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
        $this->forge->addKey('id_public_facility', true);
        $this->forge->createTable('public_facility');
    }

    public function down()
    {
        $this->forge->dropTable('public_facility');
    }
}
