@extends('layout.template_2')
@section('title','Pengaduan')
@section('container')

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<body>

<div class="col-md-12">
    <h1 align="center"><b> Data Pengaduan</b></h1>
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
                <th>No</th>
                <th>Tanggal Pengaduan</th>
                <th>NIK</th>
                <th>Isi Laporan</th>
                <th>Status</th>
                <th>Opsi</th>
                </tr>

                @php $no=0; @endphp
                @foreach($data as $data)
                @php $no++; @endphp
                <center>
                <tr>
                    <td><b>{{$no}}</td>
                    <td>{{$data->tgl_pengaduan}}</td>
                    <td>{{$data->nik}}</td>
                    <td>{{$data->isi_laporan}}</td>
                    <td>{{$data->status}}</td>
                    <td>
                    <a href="{{url('/pengaduan/hapus/'.$data->id_pengaduan)}}" class="btn btn-danger"
                    onclick="return confirm('Apakah anda yakin?')">Batalkan Pengaduan</a>
                    </td>
                </tr>
                </center>
                @endforeach
                </thead>
            </table>
        </div>
 </div>
@stop
