					@extends('layouts.master')
                    <link href="https://cdnjs.cloudflare.com/ajax/libs/selected2/4.0.3/css/selected2.min.css" rel="stylesheet" />
					@section('content')

						<div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Setor</h3></div>
                                    <div class="panel-body">
                                        <form class="form-horizontal" action="/transaksi/create" role="form" method="post">
                                        	{{csrf_field()}}
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Pegawai ID</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="id_pegawai" placeholder="Masukkan Pegawai ID..." required="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Nasabah ID</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="id_nasabah" placeholder="Masukkan Nasabah ID..." required="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Nama</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama..." required="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">NO Rekening</label>
                                                <div class="col-sm-10">
                                                    <select name="noREK" id="id_transaksi" class="form-control" required>
                                                        <option value=""></option>
                                                        @foreach($data as $rek)
                                                        <option value="{{$rek->noREK}}">{{$rek->noREK}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-md-2 control-label">Setoran Awal</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="setoranAwal" placeholder="Masukkan Setoran Awal..." required="true" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Jenis Transaksi</label>
                                                <div class="col-sm-10">
                                                    <select name="jenTRAK" class="form-control" required="true">
                                                        <option value="Debit">Debit</option>
                                                        <option value="Kredit">Kredit</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Tanggal Transaksi</label>
                                                <div class="col-md-10">
                                                    <input type="date" class="form-control" name="tglTRAN" required="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Jumlah Transaksi</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="jumTRAN" placeholder="Masukkan Jumlah Transaksi..." required="true" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Saldo</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="saldo" placeholder="Total Saldo..." required="true" autocomplete="off">
                                                </div>
                                            </div>
                                            <hr />
                                            <div style="float:right;">
                                                <a href="/transaksi/cetak_transaksi" class="btn btn-primary waves-effect waves-light">Print</a>
                                            	<a href={{url('/transaksi')}} class="btn btn-primary waves-effect waves-light">Kembali</a>
	                                            <button type="submit" class="btn btn-success waves-effect waves-light">Simpan</button>
	                                        </div>
                                        </form>
                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col -->
                        </div> <!-- End row -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script  scr="https://cdnjs.cloudflare.com/ajax/libs/selected2/4.0.3/css/selected2.min.js"></script>
<script type="text/javascript"> 
    $("#id_nasabah").select2({
    placeholder:'--pilih rekening--',
    allowClear:true
});

</script>
					@endsection