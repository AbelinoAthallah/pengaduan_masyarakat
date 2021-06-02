@extends('layout.template_1')
@section('title','Pengaduan')
@section('container')

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<body>

<div class="col-md-12">
    <h1 align="center"><b> Data Pengaduan</b></h1>
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
                @foreach($datas as $data)
                @php $no++; @endphp
                <center>
                <tr>
                    <td><b>{{$no}}</td>
                    <td>{{$data->tgl_pengaduan}}</td>
                    <td>{{$data->nik}}</td>
                    <td>{{$data->isi_laporan}}</td>
                    <td>{{$data->status}}</td>
                    <td>
                    <a href="{{url('/pengaduan_admin/edit/'.$data->id_pengaduan)}}" class="btn btn-warning">Verifikasi</a>
                    <a href="{{ url('/pengaduan_admin/detail/'.$data->id_pengaduan) }}" class="btn btn-info">Beri Tanggapan</a>
                    <a href="{{url('/pengaduan_admin/hapus/'.$data->id_pengaduan)}}" class="btn btn-danger"
                    onclick="return confirm('Apakah anda yakin?')">Hapus </i></a>
                    </td>
                </tr>
                </center>
                @endforeach
                </thead>
            </table>
        </div>
 </div>
@stop
