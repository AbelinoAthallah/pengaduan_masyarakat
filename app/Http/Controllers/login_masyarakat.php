<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ModelMasyarakat;
use Session;

class login_masyarakat extends Controller
{
    public function home()
    {
        return view('Index');
    }

    public function index_masyarakat()
    {
        return view('dashboard_masyarakat');
    }

    public function cek(Request $req){
        $this->validate($req,[
            'username'=>'required',
            'password'=>'required'
        ]);

        $proses=ModelMasyarakat::where('username',$req->username)
                            ->where('password',md5($req->password));
        if($proses->count()>0){
            $data=$proses->first();
            Session::put('nik',$data->nik);
            Session::put('nama',$data->nama);
            Session::put('username',$data->username);
            Session::put('password',$data->password);
            Session::put('telp',$data->telp);
            return redirect('/masyarakat');
        }else{
            Session::flash('alert_message','Username dan password tidak cocok');
            return redirect('login_masyarakat');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('login_masyarakat');
    }
}
