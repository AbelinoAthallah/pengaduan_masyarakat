<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboard_masyarakat extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('cek_login_masyarakat');
    // }

    public function index_masyarakat()
    {
        return view('dashboard_masyarakat');
    }
}
