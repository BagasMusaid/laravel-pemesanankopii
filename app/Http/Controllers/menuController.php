<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\Detailpesanan;
use App\Models\pesanan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class menuController extends Controller
{

    public function index()
    {
        $barang = barang::all();
        return view('menu', [
            'jud' => 'menu'
        ], compact('barang'));
    }

    public function pesan(Request $request, $id)
    {
        $this->middleware('auth');
        $barang = barang::where('id', $id)->first();
        $cek_pesanan = pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();

        if (empty($cek_pesanan)) {
            $pesanan = new pesanan();
            $pesanan->user_id = Auth::user()->id;
            $pesanan->tanggal = Carbon::now();
            $pesanan->status = 0;
            $pesanan->jumlah_harga = 0;
            $pesanan->save();
        }
        $pesanan_baru = pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $cek_detail = Detailpesanan::where('barang_id', $barang->id)->where('pesanan_id', $pesanan_baru->id)->first();

        if (empty($cek_detail)) {
            $detail = new Detailpesanan();
            $detail->barang_id = $barang->id;
            $detail->pesanan_id = $pesanan_baru->id;
            $detail->jumlah = $request->jumlah;
            $detail->no_meja = $request->meja;
            $detail->jumlah_harga = $barang->harga * $request->jumlah;
            $detail->save();
        } else {
            $detail_baru = Detailpesanan::where('barang_id', $barang->id)->where('pesanan_id', $pesanan_baru->id)->first();
            $detail_baru->jumlah = $detail_baru->jumlah + $request->jumlah;
            $jumlah_pesanan_baru = $barang->harga * $request->jumlah;
            $detail_baru->jumlah_harga = $detail_baru->jumlah_harga + $jumlah_pesanan_baru;
            $detail_baru->update();
        }
        $pesanan = pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $pesanan->jumlah_harga = $pesanan->jumlah_harga + $barang->harga * $request->jumlah;
        $pesanan->update();

        toast('Caffe ' . $barang->nama_barang . ' ditambahkan ke keranjang', 'success')->position('center');

        return redirect('menu');
    }
}
