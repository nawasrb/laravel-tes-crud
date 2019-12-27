					@extends('layouts.master')

					@section('content')

						<div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Edit Ahli Waris</h3></div>
                                    <div class="panel-body">
                                    	@foreach($data_waris as $dw)
                                        <form class="form-horizontal" action="/waris/{{$dw->id_ahliwaris}}/update" role="form" 
                                            method="post">
                                        	{{csrf_field()}}
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Nasabah ID</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="id_nasabah" placeholder="Masukkan Id Nasabah..." value="{{$dw->id_nasabah}}" required="true" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Nama Lengkap</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="namaAW" placeholder="Masukkan Nama Lengkap..." value="{{$dw->namaAW}}" required="true">
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
                                                    <input type="number" class="form-control" name="noIdentitasAW" placeholder="Masukkan No Identitas..." value="{{$dw->noIdentitasAW}}" required="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Hubungan Keluarga</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="hubungan" placeholder="Masukkan Hubungan Keluarga..." value="{{$dw->hubungan}}" required="true" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Nama Ibu Kandung</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="ibuKandung" placeholder="Masukkan Nama Ibu Kandung..." value="{{$dw->ibuKandung}}" required="true" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Alamat</label>
                                                <div class="col-md-10">
                                                    <textarea class="form-control" name="alamatAW" rows="3" placeholder="Masukkan Alamat..." value="{{$dw->alamatAW}}" required="true"></textarea>
                                                </div>
                                            </div>
                                            <hr />
                                            <div style="float:right;">
                                            	<a href={{url('/waris')}} class="btn btn-danger waves-effect waves-light">Kembali</a>
	                                            <button type="submit" class="btn btn-success waves-effect waves-light">Simpan</button>
	                                        </div>
                                        </form>
                                        @endforeach
                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col -->
                        </div> <!-- End row -->

					@endsection