@extends('layout.template_2')
@section('title', "Tanggapan Pengaduan")
@section('container')
<br><br>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="p-3  bg-info text-white">
<section class="main-section">
    <div class="content">
        <h1 align="center">Tanggapan Pengaduan</h1>
        <hr>

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li><strong>{{ $error }}</strong></li>
                @endforeach
            </div>
        @endif

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
                <a href="{{url('/pengaduan_admin')}}" class="btn btn-md btn-danger"><i class="fa fa-arrow-left"></i><b> Cancel</b></a>
            </div>
        </form>
        @endforeach
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
