@extends('layout.template_1')
@section('title','Masyarakat')
@section('container')

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<body>

<div class="col-md-12">
    <h1 align="center"><b> Data Masyarakat</b></h1>
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
                <th>NIK</th>
                <th>Nama</th>
                <th>Username</th>
                <th>No Telp</th>
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
                    <td>{{$data->nik}}</td>
                    <td>{{$data->nama}}</td>
                    <td>{{$data->username}}</td>
                    <td>{{$data->telp}}</td>
                    <td>
                    @if(Session::get('level')=='admin')
                    <!-- <a href="{{url('/user/detail/'.$data->id_user)}}" class="btn btn-primary"><i class="far fa-window-restore"></i> <b>Pinjam</b></a> -->
                    <a href="{{url('/masyarakat/edit/'.$data->nik)}}" class="btn btn-warning"><i class="far fa-edit"></i></a>
                    <a href="{{url('/masyarakat/hapus/'.$data->nik)}}" class="btn btn-danger"
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

