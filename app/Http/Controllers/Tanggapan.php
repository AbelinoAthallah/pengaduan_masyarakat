<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use PDF;
use App\Models\ModelTanggapan;
use Validator;

class Tanggapan extends Controller
{

    public function index()
    {
      $data['datas']=ModelTanggapan::join('pengaduan','pengaduan.id_pengaduan','tanggapan.id_pengaduan')
      ->join('petugas','petugas.id_petugas','tanggapan.id_petugas')
      ->join('masyarakat','masyarakat.nik','pengaduan.nik')
      ->get();
      return view('tanggapan_admin',$data);
    }

    public function create()
    {
        return view('tanggapan_create');
    }

    public function store(Request $request, $id_pengaduan)
    {
        if(Session()->get('level') == 'admin' || Session()->get('level') == 'petugas'){
        ModelTanggapan::create([
            'id_pengaduan' => $id_pengaduan,
            'id_petugas' => Session()->get('id_petugas'),
            'tgl_tanggapan' => $request->tgl_tanggapan,
            'tanggapan' => $request->tanggapan
        ]);
        return redirect()->action([Pengaduan_Admin::class, 'index'])->with('alert_message', 'Berhasil Menanggapi!');
    }
    }
}
