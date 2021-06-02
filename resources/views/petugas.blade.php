@extends('layout.template_1')
@section('title','Petugas')
@section('container')

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<body>

<div class="col-md-12">
    <h1 align="center"><b> Data Pengguna</b></h1>
    <br>
    <a href="{{ url('petugas_create') }}" class="btn btn-outline-dark">Tambah Data Pengguna</a>
    <br>
    <!-- <div class="card bg-outline-secondary"> -->

        <div class="body">
            @if(Session::get('alert_message'))
                <div class="alert alert-success">
                    <strong>{{Session::get('alert_message')}}</strong>
                </div>
            @endif
            <table class="table table-hover table-striped">
            <thead class="thead-dark">

                <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>No Telp</th>
                <th>Level</th>
                @if(Session::get('level')=='admin')
                <th>Opsi</th>
                @endif
                </tr>

                @php $no=0; @endphp
                @foreach($datas as $data)
                @php $no++; @endphp
                <center>
                <tr>
                    <td><b>{{$no}}</td>
                    <td>{{$data->nama_petugas}}</td>
                    <td>{{$data->username}}</td>
                    <td>{{$data->telp}}</td>
                    <td>{{$data->level}}</td>
                    <td>
                    @if(Session::get('level')=='admin')
                    <!-- <a href="{{url('/user/detail/'.$data->id_user)}}" class="btn btn-primary"><i class="far fa-window-restore"></i> <b>Pinjam</b></a> -->
                    <a href="{{url('/petugas/edit/'.$data->id_petugas)}}" class="btn btn-warning"><i class="far fa-edit"></i></a>
                    <a href="{{url('/petugas/hapus/'.$data->id_petugas)}}" class="btn btn-danger"
                    onclick="return confirm('Apakah anda yakin?')"><i class="far  fa-trash-alt"></i></a>
                    @endif
                    </td>
                </tr>
                </center>
                @endforeach
                </thead>
            </table>
        </div>
   <!-- </div> -->

    <!-- <a href="{{ url('mobil/cetak_pdf') }}" class="btn btn-outline-secondary">Cetak</a> -->
 </div>
@stop
