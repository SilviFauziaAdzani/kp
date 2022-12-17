<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'nama_user' => 'MTsN 4 Sumedang',
            'username' => 'mtsn4sumedang',
            'password' => password_hash('sumedang', PASSWORD_BCRYPT),

        ];
        $this->db->table('user')->insert($data);
    }
}
