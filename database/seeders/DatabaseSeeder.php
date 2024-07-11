<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => "Adhitya Bagus Kurniawan",
            'email' => 'adhitia.bagus97@gmail.com',
            'password' => bcrypt('admin'),
            'is_admin' => true,
        ]);

        \App\Models\Profile::factory()->create([
            'user_id' => 1,
            'phone_number' => "085785943610",
            'instagram' => "Adhiit.b",
            'facebook' => "Adhitya Bagus",
            'about' => "My name is Adhitya Bagus Kurniawan Saya merupakan mahasiswa aktif di Fakultas Teknologi Informasi di Universitas Mercubuana Yogyakarta, dan bekerja di Kantor Notaris-PPAT Dr. Winahyu Erwiningsih di Kabupaten Sleman",
        ]);

        \App\Models\Resume::factory()->create([
            'user_id' => 1,
            'posisi' => "Staff Notaris",
            'perusahaan' => "Notaris Dr. Winahyu Erwiningsih",
            'tempat' => "Kabupaten Sleman",
            'description' => "berfokus dengan pembuatan, pendaftaran, serta pengurusan legalitas yang berkaitan dengan sertifikat tanah dan bangunan.",
            'tahun_mulai' => 2023,
            'tahun_keluar' => null,
        ]);
        \App\Models\Resume::factory()->create([
            'user_id' => 1,
            'posisi' => "Staff Administrasi",
            'perusahaan' => "PT. Suroyo Mulia Gas",
            'tempat' => "Kabupaten Bogor",
            'description' => "order produk gas melalui aplikasi MANDIRI Pertamina, melakuakan rekap data penjualan bulanan, merekap loogbook data konsumen dan melaporkan loogbook data konsumen ke agen pada setiap akhir bulan.",
            'tahun_mulai' => 2016,
            'tahun_keluar' => 2021,
        ]);
    }
}
