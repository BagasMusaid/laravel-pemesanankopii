<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_barang',
        'gambar',
        'harga',
        'keterangan'
    ];
    public function Detailpesanan()
    {
        return $this->hasMany(Detailpesanan::class, 'barang_id', 'id');
    }
}
