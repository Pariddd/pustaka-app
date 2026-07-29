<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePengaturanTable extends Migration
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
            'tarif_denda_per_hari' => [
                'type'       => 'INT',
                'constraint' => 11,
                'default'    => 1000,
            ],
            'nama_kepala_perpustakaan' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'nip_kepala_perpustakaan' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('pengaturan');
    }

    public function down()
    {
        $this->forge->dropTable('pengaturan');
    }
}