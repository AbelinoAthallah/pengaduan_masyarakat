@extends('layout.template_2')
@section('title', "Formulir Pengaduan")
@section('container')
<br><br>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="p-3  bg-info text-white">
<section class="main-section">
    <div class="content">
        <h1 align="center">Formulir Pengaduan</h1>
        <hr>

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li><strong>{{ $error }}</strong></li>
                @endforeach
            </div>
        @endif

        <form action="{{ url('/pengaduan/store') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
			<label for="tgl_pengaduan">Tanggal :</label>
			<input type="date" class="form-control" id="date" name="tgl_pengaduan" required
			oninvalid="this.setCustomValidity('Tanggal Pengaduan Tidak Boleh Kosong')" oninput="setCustomValidity('')">
		</div>

		<div class="form-group">
			<label for="isi_laporan">Isi Laporan :</label>
			<input type="text" class="form-control" id="isi_laporan" name="isi_laporan" required
			oninvalid="this.setCustomValidity('Laporan Tidak Boleh Kosong')" oninput="setCustomValidity('')">
		</div>

        <div class="form-group">
            <label for="foto">Foto :</label>
            <input type="file" class="btn btn-secondary" class="form-control" id="foto" name="foto" required
            oninvalid="this.setCustomValidity('Foto Tidak Boleh Kosong')" oninput="setCustomValidity('')">
        </div>

        <input type="hidden" id="status" name="status" value="0">


            <div class="form-group">
                <button type="submit" class="btn btn-md btn-primary"><i class="far fa-check-circle"></i><b> Tambah</b></button>
                <button type="reset" class="btn btn-md btn-secondary"><i class="fas fa-sync-alt"></i><b> Reset</b></button>
                <a href="{{url('/data_petugas')}}" class="btn btn-md btn-danger"><i class="fa fa-arrow-left"></i><b> Cancel</b></a>
            </div>
        </form>

    </div>
</section><script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    </script>
</div>
</div>
</div>
</div>
<br>
@endsection
