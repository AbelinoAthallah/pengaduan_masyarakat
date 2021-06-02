@extends('layout.template_1')
@section('title', "Tanggapan Pengaduan")
@section('container')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<div class="container">
    <section class="main-section">
        <div class="card-header">
            <h1 align="center">Detail Pengaduan</h1>
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
				    <label for="isi_laporan">Isi Laporan : </label>
				    <input type="text" placeholder="Isi Laporan" class="form-control" id="isi_laporan" name="isi_laporan" value="{{$datas->isi_laporan}}" readonly>
			    </div>
            </form>

            @endforeach
            <br>
            <h1 align="center">Beri Tanggapan Pengaduan</h1>
            <br>
            @foreach($data as $data)
            <form action="{{ url('/tambah_tanggapan/store/'.$data->id_pengaduan) }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
			<label for="tgl_tanggapan">Tanggal Tanggapan :</label>
			<input type="date" class="form-control" id="tgl_tanggapan" name="tgl_tanggapan" required
			oninvalid="this.setCustomValidity('Tanggal Tanggapan Tidak Boleh Kosong')" oninput="setCustomValidity('')">
		</div>

		<div class="form-group">
			<label for="tanggapan">Tanggapan :</label>
			<input type="text" class="form-control" id="tanggapan" name="tanggapan" required
			oninvalid="this.setCustomValidity('Tanggapan Harus di Isi! Tidak Boleh Kosong')" oninput="setCustomValidity('')">
		</div>

            <div class="form-group">
                <button type="submit" class="btn btn-md btn-primary"><i class="far fa-check-circle"></i><b> Kirim</b></button>
                <button type="reset" class="btn btn-md btn-secondary"><i class="fas fa-sync-alt"></i><b> Reset</b></button>
                <a href="{{url('/pengaduan_admin')}}" class="btn btn-md btn-danger"><i class="fa fa-arrow-left"></i><b> Kembali</b></a>
            </div>
        </form>
        @endforeach
            </div>
        </div>
    </section>
</div>

@endsection

