<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PostMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_post' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'title' => [
                'type'           => 'VARCHAR',
                'constraint'     => '75',
            ],
            'description' => [
                'type'           => 'VARCHAR',
                'constraint'     => '650',
            ],
            'content' => [
                'type'           => 'LONGTEXT',
            ],
            'image' => [
                'type'           => 'VARCHAR',
                'constraint'     => '75',
            ],
            'post_date' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'post_last_update' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'id_category' => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'post_tags' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'post_slug' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'post_status' => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'post_views' => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'id_user' => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
        ]);
        $this->forge->addKey('id_post', true);
        $this->forge->createTable('post');
    }

    public function down()
    {
        $this->forge->dropTable('post');
    }
}
