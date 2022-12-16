<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pengarang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pengarang' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'pengarang' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'info_pengarang' => [
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
        $this->forge->addKey('id_pengarang', true);
        $this->forge->createTable('pengarang');
    }

    public function down()
    {
        $this->forge->dropTable('pengarang');
    }
}
