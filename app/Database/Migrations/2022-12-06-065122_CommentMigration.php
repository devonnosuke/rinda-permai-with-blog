<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CommentMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_comment' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],

            'comment_date' => [
                'type' => 'DATETIME',
            ],

            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '90',
            ],

            'message' => [
                'type' => 'text',
            ],

            'status' => [
                'type' => 'INT',
                'constraint' => '11',
            ],

            'comment_parent' => [
                'type' => 'INT',
                'constraint' => '11',
            ],

            'id_post' => [
                'type' => 'INT',
                'constraint' => '11',
            ],

            'image' => [
                'type' => 'VARCHAR',
                'constraint' => '75',
            ],

            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_comment', true);
        $this->forge->createTable('comment');
    }

    public function down()
    {
        $this->forge->dropTable('comment');
    }
}
