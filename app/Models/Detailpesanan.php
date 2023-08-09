<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detailpesanan extends Model
{
    use HasFactory;
    public function barang()
    {
        return $this->belongsTo(barang::class, 'barang_id', 'id');
    }
    public function pesanan()
    {
        return $this->belongsTo(pesanan::class, 'pesanan_id', 'id');
    }
}