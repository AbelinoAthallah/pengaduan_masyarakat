<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard_petugas extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('cek_login_petugas');
    // }

    // public function __construct()
    // {
    //     $this->middleware('cek_login_masyarakat');
    // }

    public function index()
    {
        return view('dashboard_petugas');
    }
}
