<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserAndSettingSeeder extends Seeder
{
    public function run()
    {
        // 1. Insert Akun Admin Awal
        $this->db->table('users')->insert([
            'nim_nip'    => 'admin123',
            'nama'       => 'Administrator Perpustakaan',
            'email'      => 'admin@perpus.ac.id',
            'password'   => password_hash('admin123', PASSWORD_BCRYPT),
            'role'       => 'admin',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        // 2. Insert Akun Mahasiswa Contoh (Buat Testing Nanti)
        $this->db->table('users')->insert([
            'nim_nip'    => '2026001',
            'nama'       => 'Angga Pratama',
            'email'      => 'angga@mahasiswa.ac.id',
            'password'   => password_hash('123456', PASSWORD_BCRYPT),
            'role'       => 'mahasiswa',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        // 3. Insert Settingan Denda & Kepala Perpus
        $this->db->table('pengaturan')->insert([
            'tarif_denda_per_hari'     => 1000,
            'nama_kepala_perpustakaan' => 'Dr. Budi Santoso, M.Hum',
            'nip_kepala_perpustakaan'  => '198001012005011002',
        ]);
    }
}