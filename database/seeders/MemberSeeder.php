<?php

namespace Database\Seeders;

use App\Models\Kost;
use App\Models\User;
use App\Models\User\Member;
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
        $user = User::where('role_id', 2)->first();
        
        DB::table('members')->insert([
            [
                'user_id' => $user->id,
                'kost_id' => 1,
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
