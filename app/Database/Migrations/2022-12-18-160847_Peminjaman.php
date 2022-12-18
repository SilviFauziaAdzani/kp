<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Peminjaman extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_peminjaman' => [
                'type'           => 'BIGINT',
                'constraint'     => 225,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_anggota' => [
                'type'           => 'BIGINT',
                'constraint'     => 225,
                'unsigned'       => true,
            ],
            'id_buku' => [
                'type'           => 'BIGINT',
                'constraint'     => 225,
                'unsigned'       => true,
            ],
            'pinjaman' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'kembali' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'tempo' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'denda' => [
                'type' => 'VARCHAR',
                'constraint'     => 225,
                'null' => true,
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
        $this->forge->addKey('id_peminjaman', true);
        $this->forge->addForeignKey('id_anggota', 'anggota', 'id_anggota', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_buku', 'buku', 'id_buku', 'CASCADE', 'CASCADE');
        $this->forge->createTable('peminjaman');
    }

    public function down()
    {
        $this->forge->dropForeignKey('peminjaman', 'id_anggota');
        $this->forge->dropForeignKey('peminjaman', 'id_buku');
        $this->forge->dropTable('peminjaman');
    }
}
