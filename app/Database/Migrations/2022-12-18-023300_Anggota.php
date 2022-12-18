<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Anggota extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_anggota' => [
                'type'           => 'BIGINT',
                'constraint'     => 225,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'no_anggota' => [
                'type'       => 'VARCHAR',
                'constraint' => '225',
            ],
            'nama_siswa' => [
                'type'       => 'VARCHAR',
                'constraint' => '225',
            ],
            'kelas' => [
                'type'       => 'VARCHAR',
                'constraint' => '225',
            ],
            'info_anggota' => [
                'type' => 'TEXT',
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
        $this->forge->addKey('id_anggota', true);
        $this->forge->createTable('anggota');
    }

    public function down()
    {
        $this->forge->dropTable('anggota');
    }
}
