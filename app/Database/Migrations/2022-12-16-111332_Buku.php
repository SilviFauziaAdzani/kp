<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Buku extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_buku' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'judul_buku' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'id_pengarang' => [
                'type' => 'BIGINT',
                'constraint' => 20,
                'unsigned'       => true,
                'null' => TRUE
            ],
            'penerbit' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'tahun_terbit' => [
                'type'       => 'INT',
                'constraint' => '100',
            ],
            'kode_buku' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'id_kategori' => [
                'type' => 'BIGINT',
                'constraint' => 20,
                'unsigned'       => true,
                'null' => TRUE
            ],
            'jumlah_buku' => [
                'type'       => 'INT',
                'constraint' => '100',
            ],
            'status_ketersediaan' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],

            'created_at' => [
                'type'       => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type'       => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type'       => 'DATETIME',
                'null' => true,
            ],

        ]);
        $this->forge->addKey('id_buku', true);
        $this->forge->addForeignKey('id_kategori', 'kategori', 'id_kategori', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_pengarang', 'pengarang', 'id_pengarang', 'CASCADE', 'CASCADE');
        $this->forge->createTable('buku');
    }

    public function down()
    {
        $this->forge->dropForeignKey('buku', 'id_kategori');
        $this->forge->dropForeignKey('buku', 'id_pengarang');
        $this->forge->dropTable('buku');
    }
}
