<?php

namespace App\Http\Controllers;

use App\Models\kopi;
use Illuminate\Http\Request;

class produkController extends Controller
{
    public function index()
    {
        return view('produk.index');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no' => 'required',
            'jumlah' => 'required'
        ]);
        $data = [
            'nama_pembeli' => $request->nama,
            'no_tlp' => $request->no,
            'jumlah' => $request->jumlah,
            'alamat' => $request->alamat
        ];

        kopi::create($data);
        return redirect('/menu')->with('Success', 'Pesanan Telah Di Tambahkan');
    }
}
