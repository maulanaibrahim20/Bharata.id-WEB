<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class KostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $memberId = '9b9d0175-1677-4b56-8b34-7240abc3f71d';

        $kostId = DB::table('kosts')->insertGetId([
            'judul' => 'Kost Putra Sejahtera',
            'deskripsi' => 'Kost putra dengan fasilitas lengkap dan nyaman.',
            'tag' => 'kost putra',
            'member_id' => $memberId, // UUID yang benar-benar ada di tabel users
            'cerita_pemilik' => 'Pemilik kost ini sangat ramah dan telah mengelola kost selama 10 tahun.',
            'ketentuan_pengajuan_sewa' => 'Minimal sewa 1 bulan, tidak boleh membawa hewan peliharaan.',
            'tanggal_mulai_kos' => Carbon::now(),
            'perbulan' => 1500000.00,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('facilities')->insert([
            ['kost_id' => $kostId, 'fasilitas' => 'AC', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['kost_id' => $kostId, 'fasilitas' => 'WiFi', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['kost_id' => $kostId, 'fasilitas' => 'Kamar Mandi Dalam', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        DB::table('rules')->insert([
            ['kost_id' => $kostId, 'peraturan' => 'Dilarang merokok di dalam kamar', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['kost_id' => $kostId, 'peraturan' => 'Dilarang membawa tamu tanpa izin', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        DB::table('reviews')->insert([
            ['kost_id' => $kostId, 'user_id' => $memberId, 'review' => 'Tempatnya sangat nyaman dan bersih.', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
