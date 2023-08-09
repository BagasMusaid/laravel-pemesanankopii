<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    use HasFactory;
    // protected $fillable = []
    public function User()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function barang()
    {
        return $this->belongsTo(barang::class, 'barang_id', 'id');
    }
    public function Detailpesanan()
    {
        return $this->hasMany(Detailpesanan::class, 'pesanan_id', 'id');
    }
}
