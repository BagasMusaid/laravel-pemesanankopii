<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashbordController extends Controller
{
    public function index()
    {
        return view('dashbord.index', [
            'jud' => 'index'
        ]);
    }
}
