<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function goHome()
    {
        # code...
        return view('Home');
    }

    public function goProfile()
    {
        # code...
        return view('profile');
    }

    public function goDoc()
    {
        # code...
        return view('dokumen');
    }

    public function goStatus()
    {
        # code...
        return view('status');
    }

    public function goPengajuan()
    {
        # code...
        return view('pengajuan');
    }
    
}
