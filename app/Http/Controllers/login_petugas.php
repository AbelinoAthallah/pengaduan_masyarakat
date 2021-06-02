<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ModelPetugas;
use Session;

class login_petugas extends Controller
{
    public function home()
    {
        return view('Index');
    }

    public function index()
    {
        return view('dashboard_petugas');
    }

    public function cek(Request $req){
        $this->validate($req,[
            'username'=>'required',
            'password'=>'required'
        ]);

        $proses=ModelPetugas::where('username',$req->username)
                            ->where('password',md5($req->password));
        if($proses->count()>0){
            $data=$proses->first();
            Session::put('id_petugas',$data->id_petugas);
            Session::put('nama_petugas',$data->nama_petugas);
            Session::put('username',$data->username);
            Session::put('password',$data->password);
            Session::put('telp',$data->telp);
            Session::put('level',$data->level);
            return redirect('/petugas');
        }else{
            Session::flash('alert_message','Username dan password tidak cocok');
            return redirect('login_petugas');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('login_petugas');
    }
}
