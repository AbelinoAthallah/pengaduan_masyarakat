@php
$totalmasyarakat = DB::table('masyarakat')->count();
$totaladmin = DB::table('petugas')->where('level', '=', 'admin')->count();
$totalpetugas = DB::table('petugas')->where('level', '=', 'petugas')->count();
@endphp
@extends('layout.template_1')
@section('title', "Dashboard")
@section('container')

<h1 style="color:DimGray;" align="center">DASHBOARD</h1>
<h4 style="color:DimGray;" align="center">Pengaduan Masyarakat</h4>
<br>

<div class="col-md-2 col-sm-2 col-md-offset-2 box0">
    <div class="box1">
        <span class="fas fa-user-secret"></span>
        <br><br>
       <strong>ADMIN</strong>
        <h3>{{$totaladmin}}</h3>
    </div>
        <p color-text="DimGray">Terdapat {{$totaladmin}} Admin yang Sedang Terdaftar</p>
</div>

<div class="col-md-2 col-sm-2 col-md-offset-1 box0">
    <div class="box1">
        <span class="fas fa-user"></span>
        <br><br>
       <strong>PETUGAS</strong>
        <h3>{{$totalpetugas}}</h3>
    </div>
        <p color-text="DimGray">Terdapat {{$totalpetugas}} Petugas yang Sedang Terdaftar</p>
</div>

<div class="col-md-2 col-sm-2 col-md-offset-1 box0">
    <div class="box1">
        <span class="fas fa-users"></span>
        <br><br>
       <strong>MASYARAKAT</strong>
        <h3>{{$totalmasyarakat}}</h3>
    </div>
        <p>Terdapat {{$totalmasyarakat}} Petugas yang Sedang Terdaftar</p>
</div>

<br><br><br>
<div class="col-md-4 col-sm-4 mb col-md-offset-2">
    <div class="white-panel pn">
        <div class="white-header">
			<h5 style="color:DimGray;">Tentang Aplikasi</h5>
        </div>
		<div class="row">
			<div class="col-sm-6 col-xs-6"></div>
	    </div>
	    <div class="centered" style="color:Gray;">
				<p><br><br> Aplikasi ini merupakan aplikasi yang dapat mengelola pendataan pengaduan dari masyarakat, selain dibuat sesimple mungkin, aplikasi ini juga lumayan dapat bekerja dengan baik untuk dibilang sebuah Aplikasi Pengaduan Masyarakat.</p>
	    </div>
    </div>
</div>

<div class="col-md-4 col-sm-4 mb ">
    <div class="white-panel pn">
        <div class="white-header">
			<h5 style="color:DimGray;">Tentang Pembuat</h5>
        </div>
		<div class="row">
			<div class="col-sm-6 col-xs-6"></div>
	    </div>
	    <div class="centered" style="color:Gray;">
				<p><br><br><br> Seorang siswa yang senang belajar hal baru, dan juga ingin selalu bisa bermanfaat bagi orang lain.</p>
	    </div>
    </div>
</div>

@stop
