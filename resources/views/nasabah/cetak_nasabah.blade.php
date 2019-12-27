<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
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
		<h5>Koperasi Agro Niaga Indonesia (KANINDO) Syariah</h4>
		<h6><a target="_blank" href="https://www.malasngoding.com/membuat-laporan-…n-dompdf-laravel/">Jl. Raya Sengkaling No. 293 - Malang</h5>
	</center>
 
	<table class='table table-bordered'>
		<thead>
        <tr>
            <th>Nama</th>
            <th>TTL</th>
            <th>Alamat</th>
            <th>Gender</th>
            <th>Email</th>
            <th>No Telfon</th>
            <th>Status</th>
         </tr>
    </thead>
    <tbody>
         @foreach($data_nasabah as $nasabah)
        <tr>
             <td>{{$nasabah->nama}}</td>
             <td>{{$nasabah->tgl_lahir}}</td>
             <td>{{$nasabah->alamat}}</td>
             <td>{{$nasabah->jenKel}}</td>
             <td>{{$nasabah->email}}</td>
             <td>{{$nasabah->noTelfon}}</td>
             <td>{{$nasabah->status}}</td> 
			@endforeach
		</tbody>
	</table>
 
</body>
</html>