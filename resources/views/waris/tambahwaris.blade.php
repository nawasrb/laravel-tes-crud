					@extends('layouts.master')

					@section('content')

						<div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Form Ahli Waris</h3></div>
                                    <div class="panel-body">
                                        <form class="form-horizontal" action="/waris/create" role="form" method="post">
                                        	{{csrf_field()}}
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Nasabah ID</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="id_nasabah" placeholder="Masukkan Id Nasabah..." required="true" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Nama Lengkap</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="namaAW" placeholder="Masukkan Nama Lengkap..." required="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Jenis Identitas</label>
                                                <div class="col-sm-5">
                                                    <select name="jenIdentitasAW" class="form-control">
                                                        <option value="ktp">KTP</option>
                                                        <option value="sim">SIM</option>
                                                        <option value="paspor">Paspor</option>
                                                        <option value="ktm">KTM</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="number" class="form-control" name="noIdentitasAW" placeholder="Masukkan No Identitas..." required="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Hubungan Keluarga</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="hubungan" placeholder="Masukkan Hubungan Keluarga..." required="true" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Nama Ibu Kandung</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="ibuKandung" placeholder="Masukkan Nama Ibu Kandung..." required="true" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Alamat</label>
                                                <div class="col-md-10">
                                                    <textarea class="form-control" name="alamatAW" rows="3" placeholder="Masukkan Alamat..." required="true"></textarea>
                                                </div>
                                            </div>
                                            <hr />
                                            <div style="float:right;">
                                            	<a href={{url('/waris')}} class="btn btn-primary waves-effect waves-light">Kembali</a>
	                                            <button type="submit" class="btn btn-success waves-effect waves-light">Simpan</button>
	                                        </div>
                                        </form>
                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col -->
                        </div> <!-- End row -->

					@endsection