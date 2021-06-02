@extends('layout.template_1')
@section('title', "Tanggapan Pengaduan")
@section('container')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<div class="container">
    <section class="main-section">
        <div class="card-header">
            <h1 align="center">Detail Data Pengaduan & Tanggapan</h1>
            <h3 align="center">Detail Data Pengaduan</h3>
            <hr>

            <div class="content">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @foreach($data as $datas)
            <form action="/pengaduan_admin/detail" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $datas->id_pengaduan }}"><br>

                <div class="form-group" >
				    <label for="tgl_pengaduan">Tgl Pengaduan : </label>
				    <input type="date" placeholder="Tgl Pengaduan" class="form-control" id="tgl_pengaduan" name="tgl_pengaduan" value="{{$datas->tgl_pengaduan}}" readonly>
			    </div>

                <div class="form-group" >
				    <label for="nik">NIK :</label>
				    <input type="text" placeholder="NIK" class="form-control" id="nik" name="nik" value="{{$datas->nik}}" readonly>
			    </div>

                <div class="form-group" >
				    <label for="nama">Nama Masyarakat :</label>
				    <input type="text" placeholder="Nama" class="form-control" id="nama" name="nama" value="{{$datas->nama}}" readonly>
			    </div>

                <div class="form-group" >
				    <label for="isi_laporan">Isi Laporan : </label>
				    <input type="text" placeholder="Isi Laporan" class="form-control" id="isi_laporan" name="isi_laporan" value="{{$datas->isi_laporan}}" readonly>
			    </div>
            </form>

            @endforeach
            <br>
            <h3 align="center">Detail Data Tanggapan</h3>
            <br>
            @foreach($data as $datas)
            <form action="/pengaduan_admin/detail" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $datas->id_pengaduan }}"><br>

                <div class="form-group" >
				    <label for="tgl_tanggapan">Tgl Tanggapan : </label>
				    <input type="date" placeholder="Tgl Tanggapan" class="form-control" id="tgl_tanggapan" name="tgl_tanggapan" value="{{$datas->tgl_tanggapan}}" readonly>
			    </div>

                <div class="form-group" >
				    <label for="id_pengaduan">ID Pengaduan :</label>
				    <input type="text" placeholder="ID Pengaduan" class="form-control" id="id_pengaduan" name="id_pengaduan" value="{{$datas->id_pengaduan}}" readonly>
			    </div>

                <div class="form-group" >
				    <label for="tanggapan">Tanggapan :</label>
				    <input type="text" placeholder="Tanggapan" class="form-control" id="tanggapan" name="tanggapan" value="{{$datas->tanggapan}}" readonly>
			    </div>

                <div class="form-group" >
				    <label for="id_petugas">ID Petugas: </label>
				    <input type="text" placeholder="ID Petugas" class="form-control" id="id_petugas" name="id_petugas" value="{{$datas->id_petugas}}" readonly>
			    </div>
                <div class="form-group">
                    <a href="{{url('/pengaduan_admin')}}" class="btn btn-md btn-danger">Kembali</a>
                </div>
            </form>
            @endforeach
            </div>
        </div>
    </section>
</div>

@endsection

