<?php

namespace Database\Seeders;

use App\Models\barang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class barangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $barang = [
            [
                'nama_barang' => 'espeso',
                'gambar' => 'espreso.png',
                'harga' => '12000',
                'keterangan' => 'kopi terbaik ',
            ],
            [
                'nama_barang' => 'latte',
                'gambar' => 'latte.png',
                'harga' => '15000',
                'keterangan' => 'kopi terbaik ',
            ],
            [
                'nama_barang' => 'cappucino',
                'gambar' => 'capucino.png',
                'harga' => '14000',
                'keterangan' => 'kopi terbaik ',
            ],
            [
                'nama_barang' => 'tahu',
                'gambar' => 'capucino.png',
                'harga' => '14000',
                'keterangan' => 'kopi terbaik ',
            ]

        ];
        foreach ($barang as $br => $value) {
            barang::create($value);
        }
    }
}
