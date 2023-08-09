<?php

namespace App\Http\Controllers;

use App\Models\kopi;
use App\Models\barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class kopiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = barang::paginate(5);
        return view('dashbord.kopi.index', [
            'jud' => 'kopi'
        ], compact('barang'));
        //
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
        $image = $request->file('gambar');
        $kopi  = $image->storeAs('image-kopi', uniqid() . '.' . $image->getClientOriginalExtension());
        $data = [
            "nama_barang" => $request->nama,
            "gambar" => $kopi,
            "harga" => $request->harga,
            "keterangan" => $request->keterangan
        ];
        barang::create($data);
        toast('Data Berhasil Ditambahkan', 'info')->position('center');
        return redirect('/kopi');
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
    public function edit(Request $request, $id)
    {
        $data = [
            "nama_barang" => $request->nama,
            "harga" => $request->harga,
            "keterangan" => $request->keterangan,
        ];
        barang::where('id', $id)->update($data);
        toast('Data Barang Berhasil Diubah', 'info')->position('center');
        return redirect('kopi');
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $id)
    {
        $kopi = barang::where('id', $id)->first();
        return view('dashbord.kopi.editGambar', [
            'jud' => 'kopi'
        ], compact('kopi'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hapus = barang::findorfail($id);
        $hapus->delete();
        toast('Data Barang Berhasil Dihapus', 'succes')->position('center');
        return redirect('kopi');
    }
    public function editGambar(Request $request, $id)
    {
        $barang = barang::findOrFail($id);
        $gambar = $request->file('gambarKopi');
        if ($gambar != null || !empty($gambar)) {
            if ($barang->gambar) {
                Storage::delete($barang->gambar);
            }
            $Gbrg  = $gambar->storeAs('image-kopi', uniqid() . '.' . $gambar->getClientOriginalExtension());
            $barang->gambar  = $Gbrg;
            $barang->update();
            toast('Foto Kopi Berhasil Diubah', 'info')->position('center');
            return redirect('/kopi');
        }
    }
}
