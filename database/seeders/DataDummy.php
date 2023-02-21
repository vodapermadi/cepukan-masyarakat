<?php

namespace Database\Seeders;

use App\Models\Pengaduan;
use App\Models\Tanggapan;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataDummy extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = new User([
            'nik' => '1122334455',
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin1234'),
            'telp' => '081122334455',
            'level' => 'admin'
        ]);
        $admin->save();
        $masyarakat = new User([
            'nik' => '1122334456',
            'name' => 'masyarakat',
            'email' => 'masyarakat@masyarakat.com',
            'password' => bcrypt('masyarakat1234'),
            'telp' => '081122334456',
            'level' => 'masyarakat'
        ]);
        $masyarakat->save();
        $petugas = new User([
            'nik' => '1122334457',
            'name' => 'petugas',
            'email' => 'petugas@petugas.com',
            'password' => bcrypt('petugas1234'),
            'telp' => '081122334456',
            'level' => 'petugas'
        ]);
        $petugas->save();
        $pengaduan = new Pengaduan([
            'tanggal_pengaduan' => '2022-12-12',
            'id_user' => 2,
            'isi_laporan' => 'sekian berita yang dapat saya sampaikan',
            'status' => 'proses'
        ]);
        $pengaduan->save();
        $tanggapan = new Tanggapan([
            'id_pengaduan' => 1,
            'tanggal_tanggapan' => '2022-12-14',
            'tanggapan' => 'aman cuy',
            'id_user' => 3
        ]);
        $tanggapan->save();
    }
}
