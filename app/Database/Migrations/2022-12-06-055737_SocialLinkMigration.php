<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SocialLinkMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_socialLink' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'type' => [
                'type'       => 'VARCHAR',
                'constraint' => '45',
            ],
            'link' => [
                'type' => 'VARCHAR',
                'constraint' => '225',
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
        $this->forge->addKey('id_socialLink', true);
        $this->forge->createTable('socialLink');
    }

    public function down()
    {
        $this->forge->dropTable('socialLink');
    }
}
