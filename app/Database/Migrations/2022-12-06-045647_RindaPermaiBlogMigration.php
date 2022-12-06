<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RindaPermaiBlogMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_about' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => '225',
            ],
            'subtitle' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'description' => [
                'type' => 'VARCHAR',
                'constraint' => '650',
            ],
            'visi' => [
                'type' => 'VARCHAR',
                'constraint' => '650',
            ],
            'misi' => [
                'type' => 'VARCHAR',
                'constraint' => '650',
            ],
            'img_thumb' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'img_profile' => [
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
        $this->forge->addKey('id_about', true);
        $this->forge->createTable('about', true);
    }

    public function down()
    {
        $this->forge->dropTable('about');
    }
}
