<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = array(
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'username' => 'admin',
            'password' => password_hash('azerty', PASSWORD_BCRYPT),
        );

        $this->db->table('users')->insert($data);
    }
}
