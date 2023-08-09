<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class profileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

        $user = User::where('id', Auth::user()->id)->first();
        return view('profile.index', [
            "jud" => "profile"
        ], compact('user'));
    }
    public function edit(Request $request, $id)
    {
        $data = [
            'name' => $request->nama,
            'username' => $request->username,
            'email' => $request->email
        ];
        User::where('id', $id)->update($data);
        toast('Data Profil berhasil diubah', 'info')->position('center');
        return redirect('profile');
    }
    public function store(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $image = $request->file('image');
        if (!empty($image)) {
            if ($user->gambar) {
                Storage::delete($user->gambar);
            }
            $profile  = $image->storeAs('user-profile', uniqid() . '.' . $image->getClientOriginalExtension());
            $user->gambar  = $profile;
            $user->save();
            toast('Foto Profil berhasil diubah', 'info')->position('center');
            return redirect('profile');
        }
    }
}
