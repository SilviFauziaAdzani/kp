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
                'constraint'     => 225,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'judul_buku' => [
                'type'       => 'VARCHAR',
                'constraint' => '225',
            ],
            'pengarang' => [
                'type' => 'VARCHAR',
                'constraint' => 225,
                'null' => TRUE,
            ],
            'penerbit' => [
                'type'       => 'VARCHAR',
                'constraint' => '225',
                'null' => TRUE,
            ],
            'tahun_terbit' => [
                'type'       => 'INT',
                'constraint' => '225',
                'null' => TRUE,
            ],
            'kode_buku' => [
                'type'       => 'VARCHAR',
                'constraint' => '225',
                'null' => TRUE,
            ],
            'id_kategori' => [
                'type'           => 'BIGINT',
                'constraint'     => 225,
                'unsigned'       => true,
                'null' => TRUE,
            ],
            'jumlah_buku' => [
                'type'       => 'INT',
                'constraint' => '225',
                'null' => TRUE,
            ],
            'jumlah_ketersediaan' => [
                'type'       => 'INT',
                'constraint' => '225',
                'null' => TRUE,
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
        $this->forge->createTable('buku');
    }

    public function down()
    {
        $this->forge->dropForeignKey('buku', 'id_kategori');
        $this->forge->dropTable('buku');
    }
}
