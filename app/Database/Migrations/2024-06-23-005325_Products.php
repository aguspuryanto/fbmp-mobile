<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Products extends Migration
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
            'title'    => [
                'type'          => 'VARCHAR',
                'constraint'    => 200
            ],
            'description'    => [
                'type'          => 'VARCHAR',
                'constraint'    => 200
            ],
            'label'    => [
                'type'          => 'VARCHAR',
                'constraint'    => 200
            ],
            'target'    => [
                'type'          => 'VARCHAR',
                'constraint'    => 200
            ],
            'price'    => [
                'type'          => 'INT',
                'constraint'    => 11,                
            ],
            'category'    => [
                'type'          => 'VARCHAR',
                'constraint'    => 200
            ],
            'condition'    => [
                'type'          => 'VARCHAR',
                'constraint'    => 200
            ],
            'status'    => [
                'type'          => 'VARCHAR',
                'constraint'    => 200
            ],
            'gambar'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
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
        $this->forge->createTable('products', true);
    }
    public function down()    
    {        
        $this->forge->dropTable('products');
    }
}
