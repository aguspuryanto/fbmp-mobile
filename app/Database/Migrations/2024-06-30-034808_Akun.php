<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Akun extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'    => [
                'type'          => 'INT',
                'constraint'    => 11,
                'auto_increment'    => True
            ],
            'akun'    => [
                'type'          => 'VARCHAR',
                'constraint'    => 200
            ],
            'created_at'    => [
                'type'          => 'DATETIME',
                'null'          => true
            ],
            'updated_at'    => [
                'type'          => 'DATETIME',
                'null'          => true
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('akun', true);
    }

    public function down()
    {
        $this->forge->dropTable('akun');
    }
}
