<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ContactMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_contact' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '75',
            ],
            'phone' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],
            'name_residence' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'address' => [
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
        $this->forge->addKey('id_contact', true);
        $this->forge->createTable('contact', true);
    }

    public function down()
    {
        $this->forge->dropTable('contact');
    }
}
