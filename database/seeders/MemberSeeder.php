<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data dummy untuk tabel members
        DB::table('members')->insert([
            [
                'user_id' => '9b9d0175-1677-4b56-8b34-7240abc3f71b', // Ganti dengan UUID dari user yang sesuai
                'nama_depan' => 'Shanna',
                'nama_belakang' => 'Steuber',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '1990-01-01',
                'alamat_utama' => 'Jl. Raya No. 123',
                'provinsi' => 1,
                'kota' => 1,
                'kecamatan' => 1,
                'kode_pos' => 12345,
                'no_telp' => '081234567890',
                'image' => 'default.jpg',
                'memiliki_toko' => true,
                'verifikasi_ktp' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
