<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
    <h5>Laporan Pengaduan Masyarakat</h5>
        <h6><a target="_blank" href=""></a>Data Pengaduan Masyarakat</h6>

	<table class="table table-striped">
    <thead class="thead-dark">
        <tr align="center">
        <th>Id Pengaduan</th>
                <th>Tanggal Pengaduan</th>
                <th>NIK</th>
                <th>Isi Laporan</th>
                <th>Status</th>
                <th>Tanggapan</th>
                </tr>
<tbody>
                @foreach($pengaduan as $data)

                <tr>
                    <td><b>{{$data->id_pengaduan}}</td>
                    <td>{{$data->tgl_pengaduan}}</td>
                    <td>{{$data->nik}}</td>
                    <td>{{$data->isi_laporan}}</td>
                    <td>{{$data->status}}</td>
                    <td>{{$data->tanggapan}}</td>
                    </tr>

			@endforeach
		</tbody>
	</table>


</body>
</html>
