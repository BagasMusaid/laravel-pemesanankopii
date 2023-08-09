<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\Detailpesanan;
use App\Models\pesanan;
use Carbon\Carbon;
use Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Ramsey\Uuid\v1;

class beliController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index($id)
    {
        $brg = barang::where('id', $id)->first();
        return view('beli.index', [
            'jud' => 'beli'
        ], compact('brg'));
    }
    public function pesan(Request $request, $id)
    {
        $brg = barang::where('id', $id)->first();
        // variabel menyipan tanggal 
        $tanggal = Carbon::now();

        $cek_pesan = pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();

        if (empty($cek_pesan)) {
            // simpan ke db pesanan 
            $pesanan = new pesanan();
            $pesanan->user_id = Auth::user()->id;
            $pesanan->tanggal = $tanggal;
            $pesanan->status = 0;
            $pesanan->jumlah_harga = 0;
            $pesanan->save();
        }
        // simpan ke db detalpesanan
        $pesanan_baru = pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();

        // cek pesanan detail
        $cek_detail = Detailpesanan::where('barang_id', $brg->id)->where('pesanan_id', $pesanan_baru->id)->first();
        if (empty($cek_detail)) {
            $detail = new Detailpesanan();
            $detail->barang_id = $brg->id;
            $detail->pesanan_id = $pesanan_baru->id;
            $detail->jumlah = $request->jumlah;
            $detail->no_meja = $request->meja;
            $detail->jumlah_harga = $brg->harga * $request->jumlah;
            $detail->save();
        } else {
            $detail = Detailpesanan::where('barang_id', $brg->id)->where('pesanan_id', $pesanan_baru->id)->first();
            $detail->jumlah = $detail->jumlah + $request->jumlah;

            $harga_pesanan_detail_baru = $brg->harga * $request->jumlah;

            $detail->jumlah_harga = $detail->jumlah_harga + $harga_pesanan_detail_baru;
            $detail->update();
        }
        // jumlah_total 
        $pesanan = pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $pesanan->jumlah_harga = $pesanan->jumlah_harga + $brg->harga * $request->jumlah;
        $pesanan->update();

        toast('Caffe ' . $brg->nama_barang . ' ditambahkan ke keranjang', 'success')->position('center');


        return redirect('checkout');
    }
    public function konfirmasi()
    {
        $pesanan = pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $pesanan->status = 1;
        $pesanan->update();
        toast('pesanan sedang diproses', 'success')->position('center');
        return redirect('/');
    }
}
