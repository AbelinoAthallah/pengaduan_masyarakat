@extends('layout.template_2')
@section('title','Tanggaoan')
@section('container')

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<body>

<div class="col-md-12">
    <h1 align="center"><b> Data Tanggapan</b></h1>
    <br>
    <!-- <a href="{{ url('petugas_create') }}" class="btn btn-outline-dark">Tambah Data Pengguna</a> -->
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
                <th>Id Pengaduan</th>
                <th>Tanggal Pengaduan</th>
                <th>NIK</th>
                <th>Isi Laporan</th>
                <th>Status</th>
                <th>Tanggapan</th>
                <th>Opsi</th>
                </tr>

                @foreach($datas as $data)
                <center>
                <tr>
                    <td><b>{{$data->id_pengaduan}}</td>
                    <td>{{$data->tgl_pengaduan}}</td>
                    <td>{{$data->nik}}</td>
                    <td>{{$data->isi_laporan}}</td>
                    <td>{{$data->status}}</td>
                    <td>{{$data->tanggapan}}</td>
                    <td>
                    <a href="{{url('/pengaduan/selesai/'.$data->id_pengaduan)}}" class="btn btn-success"
                    onclick="return confirm('Apakah anda yakin?')">Selesai</a>
                    </td>
                </tr>
                </center>
                @endforeach
                </thead>
            </table>
        </div>
 </div>
@stop
