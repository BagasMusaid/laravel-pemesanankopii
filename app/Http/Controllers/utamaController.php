<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\pesanan;
use Illuminate\Http\Request;
use App\Models\Detailpesanan;
use Illuminate\Support\Facades\Auth;

class utamaController extends Controller
{
    public function index()
    {
        $barangs = barang::take(6)->get();

        return view('home', [
            'jud' => 'home'

        ], compact('barangs'));
    }
}
