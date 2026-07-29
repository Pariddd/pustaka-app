<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDendaTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'peminjaman_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'jumlah_hari' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'total_denda' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'status_bayar' => [
                'type'       => 'ENUM',
                'constraint' => ['belum_bayar', 'lunas'],
                'default'    => 'belum_bayar',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('peminjaman_id', 'peminjaman', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('denda');
    }

    public function down()
    {
        $this->forge->dropTable('denda');
    }
}