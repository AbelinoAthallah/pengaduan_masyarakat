@extends('layout.template_1')
@section('title', "Edit Petugas")
@section('container')
<br><br>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="p-3  bg-info text-white">
<section class="main-section">
    <div class="content">
        <h1 align="center">Edit Petugas</h1>
        <hr>

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li><strong>{{ $error }}</strong></li>
                @endforeach
            </div>
        @endif

        @foreach($data as $datas)
        <form action="{{ url('/petugas/update') }}" method="post">
            {{csrf_field() }}
           <input type="hidden" name="id" value="{{ $datas->id_petugas }}">

           <div class="form-group">
				<label for="nama_petugas">Nama :</label>
					<input type="text" class="form-control" id="nama_petugas" name="nama_petugas" value="{{$datas->nama_petugas}}" required
					oninvalid="this.setCustomValidity('Nama Tidak Boleh Kosong')" oninput="setCustomValidity('')">
				</div>

				<div class="form-group">
					<label for="nohp">No Telp :</label>
					<input type="text" class="form-control" id="telp" name="telp" value="{{$datas->telp}}"
					onkeypress="return event.charCode >= 48 && event.charCode <=57"required
					oninvalid="this.setCustomValidity('Nomor Telepon Tidak Boleh Kosong')" oninput="setCustomValidity('')">
				</div>

				<div class="form-group">
					<label for="username">Username :</label>
					<input type="text" class="form-control" id="username" name="username" value="{{$datas->username}}" required
					oninvalid="this.setCustomValidity('Username Tidak Boleh Kosong')" oninput="setCustomValidity('')">
				</div>

				<div class="form-group">
					<label for="password">Password :</label>
					<input type="password" class="form-control" id="password" name="password" value="{{$datas->password}}" required
					oninvalid="this.setCustomValidity('Password Tidak Boleh Kosong')" oninput="setCustomValidity('')">
				</div>

				<div class="form-group">
				    <label for="level" class="control-label" required
				    oninvalid="this.setCustomValidity('Status Tidak Boleh Kosong')" oninput="setCustomValidity('')">
				    Level :
				</label>

				<br>
					<td><select  name="level">
					<option id="level" name="level" value="admin">ADMIN</option>
                    <option id="level" name="level" value="petugas">PETUGAS</option>
					</select>
					</td>
				</div>

            <div class="form-group">
                <button type="submit" class="btn btn-md btn-primary"><i class="far fa-check-circle"></i><b> Update</b></button>
                <button type="reset" class="btn btn-md btn-secondary"><i class="fas fa-sync-alt"></i><b> Reset</b></button>
                <a href="{{url('/data_petugas')}}" class="btn btn-md btn-danger"><i class="fa fa-arrow-left"></i><b> Cancel</b></a>
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
