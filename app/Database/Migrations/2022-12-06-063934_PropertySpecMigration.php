<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PropertySpecMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_property_spec' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'specification' => [
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
        $this->forge->addKey('id_property_spec', true);
        $this->forge->createTable('property_spec');
    }

    public function down()
    {
        $this->forge->dropTable('property_spec');
    }
}
