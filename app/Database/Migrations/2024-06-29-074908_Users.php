<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'username'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'email'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'password' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'role' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'status' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'project_name' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'			=> true
			],
			'nowa' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'kota' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'paket' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'created_at'      => [
				'type'           => 'TIMESTAMP',
				'null'           => true,
			],
		]);
		// primary key
		$this->forge->addKey('id', TRUE);
		// tabel users
		$this->forge->createTable('users', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
