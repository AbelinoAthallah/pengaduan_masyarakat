@extends('layout.template_1')
@section('title', "Detail dan Verifikasi Data Pengaduan")
@section('container')
<br><br>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="p-3  bg-info text-white">
<section class="main-section">
    <div class="content">
        <h1 align="center">Detail dan Verifikasi Data Pengaduan</h1>
        <hr>

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li><strong>{{ $error }}</strong></li>
                @endforeach
            </div>
        @endif

        @foreach($data as $datas)
        <form action="{{ url('/pengaduan_admin/update') }}" method="post">
            {{csrf_field() }}
           <input type="hidden" name="id" value="{{ $datas->id_pengaduan }}">
                <div class="form-group" >
				    <label for="foto">Foto : </label>
				    <input type="text" placeholder="Foto" class="form-control" id="foto" name="foto" value="{{$datas->foto}}" readonly>
			    </div>

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

                <div class="form-group">
				    Verifikasi :
				    <br>
					    <div for="level" class="btn-group  btn-group-toggle " data-toggle="buttons">
						    <label class="btn btn-default">
							    <input type="radio"  id="status" name="status" value="proses" autocomplete="off" checked> PROSES
						    </label>
						    <label class="btn btn-default">
							    <input type="radio" id="status" name="status" value="selesai" autocomplete="off"> SELESAI
						    </label>
					    </div>
			    </div>
	    <div class="form-group" align="center">
		    <button type="reset" class="btn btn-default" ><b>Reset</b></button>
		    <a href="{{url('/pengaduan_admin')}}"><button type="button" class="btn btn-danger"><b>Cancel</b></button></a>
		    <button class="btn btn-theme" type="submit"><b>Selesai</b></button>
	    </div>

	    </form>
        @endforeach
    </div>
</section>
</div>
</div>
</div>
</div>
<br>
@endsection
