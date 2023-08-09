<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\Detailpesanan;
use App\Models\pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class checkoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesanan = pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        if (!empty($pesanan)) {
            $detail = Detailpesanan::where('pesanan_id', $pesanan->id)->get();
            return view('beli.checkout', [
                'jud' => 'checkout'
            ], compact('pesanan', 'detail'));
        }
        return view('beli.checkout', [
            'jud' => 'checkout'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $barang = barang::where('id', $id)->first();
        $pesanan = pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $detail = Detailpesanan::where('barang_id', $barang->id)->first();
        return view('beli.edit', [
            'jud' => 'checkout'
        ], compact('detail', 'barang', 'pesanan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $data = [
            'jumlah' => $request->jumlah,
            'no_meja' => $request->meja
        ];
        Detailpesanan::where('barang_id', $id)->update($data);
        toast('Pesanan kamu ' . Auth::user()->name . ' berhasil diubah', 'info')->position('center');
        return redirect('/checkout');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $detail = detailpesanan::where('id', $id)->first();
        if ($detail) {
            $pesanan = pesanan::find($detail->pesanan_id); // Menggunakan 'find()' untuk mengambil satu objek pesanan

            $pesanan->jumlah_harga = $pesanan->jumlah_harga - $detail->jumlah_harga;
            $pesanan->update();
            $detail->delete();
            toast('Pesanan berhasil dihapus', 'info')->position('center');
            return redirect('/checkout');
        } else {
            // Tambahkan logika atau respons sesuai kebutuhan jika detail pesanan tidak ditemukan.
            toast('Gagal menghapus data', 'error')->position('center');
            return redirect('/checkout');
        }
    }
}
