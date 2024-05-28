<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Kost extends Model
{
    protected $fillable = [
        'nama', 'alamat', 'harga', 'deskripsi', 'gambar', 'status', 'mitra', 'fasilitas_kamar', 'fasilitas_kamar_mandi', 'peraturan_khusus', 'fasilitas_umum', 'fasilitas_parkir', 'peraturan_kos', 'lokasi', 'ketentuan_pengajuan', 'review', 'mulai_kost', 'perbulan', 'tipe_kost'
    ];

    public function saveImage($image)
    {
        $filename = uniqid('kost_') . '.' . $image->getClientOriginalExtension();
        $path = $image->storeAs('public/kost_images', $filename);
        $this->gambar = $filename;
        $this->save();
        return $path;
    }

    public function getImageUrl()
    {
        if ($this->gambar) {
            return Storage::url('public/kost_images/' . $this->gambar);
        }
        return null;
    }
}
