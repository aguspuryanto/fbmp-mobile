<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'username' => 'Administrator', 
            'email'    => 'umkm2024@gmail.com', 
            'password' => password_hash('umkm2024', PASSWORD_DEFAULT), 
            'role'     => 'admin',
            'status'   => 'reaktif',
            'project_name' => 'null',
            'created_at' => date('Y-m-d H:i:s')
        ];
        $this->db->table('users')->insert($data);
    }
}
