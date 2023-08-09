<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kopi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pembeli',
        'no_tlp',
        'jumlah',
        'alamat'
    ];
}
