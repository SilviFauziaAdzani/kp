<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Peminjaman extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pengunjung' => [
                'type'           => 'BIGINT',
                'constraint'     => 225,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_pengunjung' => [
                'type'       => 'VARCHAR',
                'constraint' => '225',
            ],
            'kelas' => [
                'type' => 'VARCHAR',
                'constraint' => 225,
                'null' => TRUE,
            ],
            'id_buku' => [
                'type'           => 'BIGINT',
                'constraint'     => 225,
                'unsigned'       => true,
            ],
            'tanggal_kunjungan' => [
                'type' => 'DATE',
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
        $this->forge->addKey('id_pengunjung', true);
        $this->forge->addForeignKey('id_buku', 'buku', 'id_buku', 'CASCADE', 'CASCADE');
        $this->forge->createTable('pengunjung');
    }

    public function down()
    {
        $this->forge->dropForeignKey('pengunjung', 'id_buku');
        $this->forge->dropTable('pengunjung');
    }
}
