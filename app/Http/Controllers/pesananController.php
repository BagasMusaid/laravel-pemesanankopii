<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\barang;
use App\Models\pesanan;
use Illuminate\Http\Request;
use App\Models\Detailpesanan;

class pesananController extends Controller
{
    public function index()
    {
        $pesanan = pesanan::where('status', 1)->paginate(4);
        $data = [];
        if (!empty($pesanan)) {

            foreach ($pesanan as $psn) {

                $user = User::where('id', $psn->user_id)->first();
                $detail = Detailpesanan::where('pesanan_id', $psn->id)->get();



                foreach ($detail as $dtl) {
                    $barang = barang::find($dtl->barang_id);
                    $barangs[] = $barang;
                }
            }


            return view('dashbord.pesanan.index', [
                "jud" => "pesanan"
            ], compact('pesanan', 'detail', 'user', 'barangs'));
        }
        return view('dashbord.pesanan.index', [
            "jud" => "pesanan",
        ]);
    }
}
