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
            <th>Pegawi ID</th>
            <th>Nasabah ID</th>
            <th>No Rekening</th>
            <th>Jenis Transaksi</th>
            <th>Tanggal Transaksi</th>
            <th>Jumlah Transaksi</th>   
        </tr>
    </thead>

    <!--menampilkan database ke index.blade-->
    <tbody>
        @foreach($transaksi as $transaksi)
        <tr>
            <td>{{$transaksi->id_pegawai}}</td>
            <td>{{$transaksi->id_nasabah}}</td>
            <td>{{$transaksi->noREK}}</td>
            <td>{{$transaksi->jenTRAK}}</td>
            <td>{{$transaksi->tglTRAN}}</td>
            <td>{{$transaksi->jumTRAN}}</td>
            <td>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>