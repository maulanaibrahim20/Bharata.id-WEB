<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kost extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul', 'deskripsi', 'tag', 'member_id', 'cerita_pemilik', 'ketentuan_pengajuan_sewa', 'tanggal_mulai_kos', 'perbulan'
    ];

    public function owner()
    {
        return $this->belongsTo(User::class, 'member_id');
    }

    public function facilities()
    {
        return $this->hasMany(Facility::class);
    }

    public function rules()
    {
        return $this->hasMany(Rule::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
