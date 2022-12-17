<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PropertyMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_property' => [
                'type' => 'INT',
                'constraint' => '5',
                'unsiged' => true,
                'auto_increment' => true,
            ],
            'type_name' => [
                'type' => 'VARCHAR',
                'constraint' => '75',
            ],
            'address' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'post_number' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
            ],
            'lt' => [
                'type' => 'INT',
                'constraint' => '5',
            ],
            'lb' => [
                'type' => 'INT',
                'constraint' => '5',
            ],
            'area' => [
                'type' => 'INT',
                'constraint' => '5',
            ],
            'bads' => [
                'type' => 'INT',
                'constraint' => '2',
            ],
            'baths' => [
                'type' => 'INT',
                'constraint' => '2',
            ],
            'garages' => [
                'type' => 'INT',
                'constraint' => '2',
            ],
            'description' => [
                'type' => 'VARCHAR',
                'constraint' => '650',
            ],
            'aminities' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'video' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'img_card' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'img_spec1' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'img_spec2' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],

        ]);
        $this->forge->addKey('id_property', true);
        $this->forge->createTable('property');
    }

    public function down()
    {
        $this->forge->dropTable('property');
    }
}
