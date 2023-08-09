<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    //

    public function index()
    {
        return view('register.index', [
            'jud' => 'registrasi'
        ]);
    }

    public function store(Request $request)
    {

        $validateddata = $request->validate([
            'name' => 'required|min:2|max:20',
            'username' => 'required|min:3|max:10|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4|max:15',
        ]);
        $validateddata['password'] = Hash::make($validateddata['password']);
        User::create($validateddata);
        return redirect('/login')->with('Succes', 'Registration Succesfull! please login');
    }
}
