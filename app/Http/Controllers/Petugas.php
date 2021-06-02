<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use PDF;
use App\Models\ModelPetugas;
use Validator;

class Petugas extends Controller
{
    public function index_petugas()
    {
      $data['datas']=ModelPetugas::all();
      return view('login_petugas',$data);
    }

    public function index()
    {
      $data['datas']=ModelPetugas::all();
      return view('petugas',$data);
    }

    public function create()
    {
        return view('petugas_create');
    }
    public function detail($id_petugas)
    {
    //   $data=ModelPetugas::where('id_petugas', $id_petugas)->join('kategori', 'kategori.id_kategori', 'petugas.id_kategori')->get();
      $data['datas']=ModelPetugas::all();
      return view('petugas_detail', compact('data'));
    }


    public function store(Request $request)
    {
        ModelPetugas::create([
            'nama_petugas' => $request->nama_petugas,
            'telp' => $request->telp,
            'username' => $request->username,
            'password' => md5($request->password),
            'level' => $request->level
        ]);
        return redirect()->action('Petugas@index_petugas')->with('alert_message', 'Berhasil Daftar!');
    }

    public function store_2(Request $request)
    {
        ModelPetugas::create([
            'nama_petugas' => $request->nama_petugas,
            'telp' => $request->telp,
            'username' => $request->username,
            'password' => md5($request->password),
            'level' => $request->level
        ]);
        return redirect()->action([Petugas::class, 'index'])->with('alert_message', 'Berhasil Daftar!');
    }

    public function edit($id)
    {
        $data = ModelPetugas::where('id_petugas', $id)->get();
        return view('petugas_edit', compact('data'));
    }

    public function update(Request $request)
    {
        ModelPetugas::where('id_petugas', $request->id)->update([
            'nama_petugas' => $request->nama_petugas,
            'telp' => $request->telp,
            'username' => $request->username,
            'password' => md5($request->password),
            'level' => $request->level

        ]);

        return redirect()->action([Petugas::class, 'index'])->with('alert_message', 'Berhasil Merubah Data Petugas!');
    }

    public function hapus($id)
    {
        ModelPetugas::where('id_petugas', $id)->delete();

        return redirect()->action([Petugas::class, 'index'])->with('alert_message', 'Berhasil Menghapus Data!');
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
