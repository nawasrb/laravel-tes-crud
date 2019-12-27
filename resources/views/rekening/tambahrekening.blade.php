					@extends('layouts.master')

					@section('content')

						<div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Rekening</h3></div>
                                    <div class="panel-body">
                                        <form class="form-horizontal" action="/rekening/create" role="form" method="post">
                                        	{{csrf_field()}}
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Nasabah ID</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="id_nasabah"  required="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Nama</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="nama"  required="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Nomor Rekening</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="noREK" placeholder="Masukkan Rekening..." required="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Tanggal Buka</label>
                                                <div class="col-md-10">
                                                    <input type="date" class="form-control" name="tglBuka" required="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Status Rekening</label>
                                                <div class="col-sm-10">
                                                    <select name="statusREK" class="form-control">
                                                        <option value="Aktif">Aktif</option>
                                                        <option value="Tidak Aktif">Tidak Aktif</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <hr />
                                            <div style="float:right;">
                                            	<a href={{url('/transaksi')}} class="btn btn-primary waves-effect waves-light">Kembali</a>
	                                            <button type="submit" class="btn btn-success waves-effect waves-light">Simpan</button>
	                                        </div>
                                        </form>
                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col -->
                        </div> <!-- End row -->

					@endsection