<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BukuSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');

        $data = [
            'judul_buku' => 'Belajar CodeIgniter 4',
            'id_pengarang' => 1,
            'penerbit' => $faker->name,
            'tahun_terbit' => 2001,
            'kode_buku' => $faker->phoneNumber,
            'id_kategori' => 1,
            'jumlah_buku' => 2,
            'status_ketersediaan' => 'tersedia',
            'created_at' => \CodeIgniter\I18n\Time::now(),
        ];
        $this->db->table('buku')->insert($data);
    }
}
