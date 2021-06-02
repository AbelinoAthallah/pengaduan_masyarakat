<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use PDF;
use App\Models\ModelTanggapan;
use App\Models\ModelPengaduan;
use Validator;

class Pengaduan extends Controller
{
    public function index1()
    {
        $data['data']=ModelPengaduan::join('masyarakat','masyarakat.nik','pengaduan.nik')->get();
        return view('pengaduan_masyarakat',$data);
    }

    public function index2()
    {
        $data['datas']=ModelTanggapan::join('pengaduan','pengaduan.id_pengaduan','tanggapan.id_pengaduan')
        ->join('petugas','petugas.id_petugas','tanggapan.id_petugas')
        ->join('masyarakat','masyarakat.nik','pengaduan.nik')
        ->get();
        return view('tanggapan_masyarakat',$data);
    }

    public function create()
    {
        return view('pengaduan_create');
    }


    public function store(Request $request)
    {
        if(Session()->has('nik')){

            ModelPengaduan::create([
                'nik' => Session()->get('nik'),
                'tgl_pengaduan' => $request->tgl_pengaduan,
                'isi_laporan' => $request->isi_laporan,
                'status' => $request->status,
                'foto' => $request->foto
            ]);
        }
        return redirect()->action([Pengaduan::class, 'index1'])->with('alert_message', 'Berhasil Mengajukan Pengaduan!');
    }

    public function hapus($id)
    {
        ModelPengaduan::where('id_pengaduan', $id)->delete();

        return redirect()->action([Pengaduan::class, 'index1'])->with('alert_message', 'Berhasil Menghapus Data Pengaduan!');
    }

    public function cetak_pdf(){
        $petugas = ModelPetugas::all();
        $pdf = PDF::loadview('petugas_pdf',['petugas'=>$petugas
        ]);
        return $pdf->stream();
    }
}
