<?php

namespace Database\Seeders;

use App\Models\Facility;
use App\Models\Rules;
use App\Models\Kost;
use App\Models\Review;
use App\Models\User;
use App\Models\User\Member;
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
        $user = User::where("role_id", 2)->first();
        $member = Member::where("user_id", $user->id)->first();
        $Kost = Kost::create([
            "foto" => ("foto_kost/1.jpg"),
            "judul" => "Kost Singgahsini Abc Sukakarya Tipe B Sukajadi Bandung M6BY19C7",
            "deskripsi" => "",
            "tag" => "kost campur",
            "member_id" => $member->id,
            "cerita_pemilik" => "Kost ini terdiri dari 3 lantai. Tipe kamar B berada di setiap lantainya dengan jendela menghadap ke arah koridor.

            Apabila Anda membutuhkan bantuan, Anda dapat menghubungi penjaga yang bertugas dari pukul 07.00-22.00 WIB.

            Informasi fasilitas:
            Daya listrik : 450 VA (Pascabayar)
            Sumber air : Sumur
            Wifi : Indihome - 60 Mbps
            Kapasitas parkir : 10 motor

            Biaya tambahan:
            Bisa BERDUA +700 Ribu

            Kost ini berlokasi 400 meter dari jalan raya dengan akses yang dapat dilalui oleh mobil, berlokasi 4 menit dari Universitas Kristen Maranatha dan 11 menit dari Mall PVJ Bandung.",
            "ketentuan_pengajuan_sewa" => "Bisa bayar DP (uang muka) dulu

            Biaya DP adalah 30% dari biaya yang dipilih.",
            "tanggal_mulai_kos" => now(),
            "perbulan" => "550000",
            "alamat_kost" => "Kecamatan Ngaglik, Kabupaten Sleman, Jogja"
        ]);

        $Kost = Kost::create([
            "foto" => ("foto_kost/2.jpg"),
            "judul" => "Kost Apik BINUS Anggrek Tipe B Palmerah Jakarta Barat B1L7WR04",
            "deskripsi" => "",
            "tag" => "kost campur",
            "member_id" => $member->id,
            "cerita_pemilik" => "Warna sprei yang akan disediakan tidak sama dengan warna sprei pada foto”

            Kost ini terdiri dari 2 lantai. Tipe kamar B berada di lantai 1 dan lantai 2. Semua kamar di tipe ini memiliki jendela yang menghadap secara langsung ke arah koridor.

            Apabila Anda membutuhkan bantuan, Anda bisa menghubungi penjaga yang bertugas dari pukul 08.00-18.00 WIB.

            Informasi fasilitas :
            Daya listrik : 1300 VA (Pascabayar).
            Sumber Air : Sumur.
            Wifi : Oxygen 50 Mbps.
            Kapasitas parkir : 10 motor dan 4 sepeda.

            Biaya Tambahan:
            Tambahan Elektronik +50 Ribu.
            Bisa BERDUA +500 Ribu.

            Kost ini terletak 1 menit dari jalan raya dan akses jalan yang dapat dilalui oleh mobil. Berlokasi 2 menit dari Universitas BINUS, 10 menit dari Stasiun Palmerah, 6 menit dari Taman Anggrek Mall dan Central Park.",
            "ketentuan_pengajuan_sewa" => "Bisa bayar DP (uang muka) dulu",
            "tanggal_mulai_kos" => now(),
            "perbulan" => "1048000",
            "alamat_kost" => "Palmerah"
        ]);

        Facility::create([
            "kost_id" => $Kost->id,
            "type" => "Fasilitas umum",
            "facility" => "wifi
            R. Jemur
            CCTV
            R. Cuci
            Dapur
            K. Mandi Luar
            Parkir Motor
            Parkir Mobil"

        ]);

        Facility::create([
            "kost_id" => $Kost->id,
            "type" => "Fasilitas umum",
            "facility" => "Wifi
            Kasur
            Lemari Baju
            Kursi
            jendela
            Meja
            Meja
            Ventilasi
            Bantal
            Kloset Jongkok
            Ember Mandi
            K. Mandi luar
            Bak Mandi
            Parkir Motor
            Parkir Sepeda
            R. Tamu
            R. Jemur"

        ]);

        Rules::create([
            "kost_id" => $Kost->id,
            "type" => "Peraturan di kos ini",
            "rule" => "Tamu menginap dikenakan biaya
            Dilarang bawa hewan
            Denda kerusakan barang kos
            Maks. 2 orang/ kamar
            Ada jam malam untuk tamu",
        ]);

        Rules::create([
            "kost_id" => $Kost->id,
            "type" => "Peraturan di kos ini",
            "rule" => "Tamu menginap dikenakan biaya
            Tipe ini bisa diisi maks. 2 orang/ kamar
            Tidak untuk pasutri
            Tidak boleh bawa anak",
        ]);

        Review::create([
            "kost_id" => $Kost->id,
            "user_id" => $user->id,
            "review" => "enak kost nya, lingkungannya pun enak, strategis pulaaaa",
        ]);

        Review::create([
            "kost_id" => $Kost->id,
            "user_id" => $user->id,
            "review" => "1. keamanan bagus dan aman 2.kebersihan juga lumayan karna tiap hari ada tukang bersih yang bersihin",
        ]);
    }
}
