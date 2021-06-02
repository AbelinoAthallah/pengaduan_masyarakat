<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use PDF;
use App\Models\ModelPengaduan;
use App\Models\ModelTanggapan;
use Validator;

class Pengaduan_Admin extends Controller
{
    public function index()
    {
        $data['datas']=ModelPengaduan::join('masyarakat','masyarakat.nik','pengaduan.nik')->get();
        return view('pengaduan_admin',$data);
    }

    public function detail($id) {
        $data = ModelPengaduan::where('id_pengaduan', $id)->get();
        return view('pengaduan_admin_detail', compact('data'));
    }

    public function tanggapan($id) {
        $data = ModelTanggapan::join('pengaduan','pengaduan.id_pengaduan','tanggapan.id_pengaduan')
        ->join('petugas','petugas.id_petugas','tanggapan.id_petugas')
        ->join('masyarakat','masyarakat.nik','pengaduan.nik')
        ->get();
        return view('tanggapan', compact('data'));
    }

    public function edit($id)
    {
        $data = ModelPengaduan::where('id_pengaduan', $id)->get();
        return view('pengaduan_admin_edit', compact('data'));
    }

    public function update(Request $request)
    {
        ModelPengaduan::where('id_pengaduan', $request->id)->update([
            'tgl_pengaduan' => $request->tgl_pengaduan,
            'nik' => $request->nik,
            'isi_laporan' => $request->isi_laporan,
            'foto' => $request->foto,
            'status' => $request->status

        ]);


        return redirect()->action([Pengaduan_Admin::class, 'index'])->with('alert_message', 'Berhasil Verifikasi Data! Silahkan Tanggapi Data Pengaduan Tersebut.');
    }

    public function hapus($id)
    {
        ModelPengaduan::where('id_pengaduan', $id)->delete();

        return redirect()->action([Pengaduan_Admin::class, 'index'])->with('alert_message', 'Berhasil menghapus data!');
    }

    public function cetak_pdf(){
        $pengaduan = ModelTanggapan::join('pengaduan','pengaduan.id_pengaduan','tanggapan.id_pengaduan')
        ->join('petugas','petugas.id_petugas','tanggapan.id_petugas')
        ->join('masyarakat','masyarakat.nik','pengaduan.nik')
        ->get();
        $pdf = PDF::loadview('pengaduan_pdf',['pengaduan'=>$pengaduan]);
        return $pdf->stream();
    }
}
