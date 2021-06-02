<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use PDF;
use App\Models\ModelMasyarakat;
use Validator;

class Masyarakat extends Controller
{
    public function index_masyarakat()
    {
      $data['datas']=ModelMasyarakat::all();
      return view('login_masyarakat',$data);
    }

    public function index()
    {
      $data['datas']=ModelMasyarakat::all();
      return view('masyarakat',$data);
    }

    public function create()
    {
        return view('masyarakat_create');
    }

    // public function detail($id_petugas)
    // {
    // //   $data=ModelPetugas::where('id_petugas', $id_petugas)->join('kategori', 'kategori.id_kategori', 'petugas.id_kategori')->get();
    //   $data['datas']=ModelPetugas::all();
    //   return view('petugas_detail', compact('data'));
    // }


    public function store(Request $request)
    {
        ModelMasyarakat::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => md5($request->password),
            'telp' => $request->telp

        ]);
        return redirect()->action([Masyarakat::class, 'index_masyarakat'])->with('alert_message', 'Berhasil Daftar!');
}

    public function edit($id)
    {
        $data = ModelMasyarakat::where('nik', $id)->get();
        return view('masyarakat_edit', compact('data'));
    }

    public function update(Request $request)
    {
        ModelMasyarakat::where('nik', $request->id)->update([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => md5($request->password),
            'telp' => $request->telp

        ]);


        return redirect()->action([Masyarakat::class, 'index'])->with('alert_message', 'Berhasil merubah data!');
    }

    public function hapus($id)
    {
        ModelMasyarakat::where('nik', $id)->delete();

        return redirect()->action([Masyarakat::class, 'index'])->with('alert_message', 'Berhasil menghapus data!');
    }

    public function cetak_pdf(){
        $petugas = ModelPetugas::all();
        $pdf = PDF::loadview('petugas_pdf',['petugas'=>$petugas
        ]);
        return $pdf->stream();
    }

    // public function __construct()
    // {
    //     $this->middleware('cek_login_petugas');
    // }
}
