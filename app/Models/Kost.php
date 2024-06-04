<?php

namespace App\Models;

use App\Models\User\Member;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kost extends Model
{
    use HasFactory;

    protected $guarded = [''];

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
        return $this->hasMany(Rules::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function member()
    {
        return $this->belongsTo(Member::class,'member_id');
    }
}
