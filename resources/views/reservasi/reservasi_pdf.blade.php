<!DOCTYPE html>
<html>
<head>
	<title>LAPORAN RESERVASI NK CAFE MALANG</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
 
	<div class="table table-bordered">
		<center>
			<h4>LAPORAN RESERVASI NK CAFE MALANG</h4>
			<!-- <h5><a target="_blank" href="https://www.malasngoding.com/membuat-laporan-…n-dompdf-laravel/">www.malasngoding.com</a></h5> -->
		</center>
		<br/>
		<!-- <a href="/reservasiku/reservasi_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a> -->
		<left>
		<table class='table table-bordered'>
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Handphone</th>
					<th>Tanggal</th>
					<th>Waktu</th>
					<th>Jumlah</th>
					<th>Request</th>
					<th>DP reservasi</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1 @endphp
				@foreach($reservasis as $p)
				<tr>
					<td>{{ $i++ }}</td>
					<td>{{$p->user->name}}</td>
					<td>{{$p->user->nomerhp}}</td>
					<td>{{$p->tanggal}}</td>
					<td>{{$p->waktu}}</td>
					<td>{{$p->orang}}</td>
					<td>{{$p->spesial}}</td>
					<td>{{$p->total}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
</left>
	</div>
 
</body>
</html>