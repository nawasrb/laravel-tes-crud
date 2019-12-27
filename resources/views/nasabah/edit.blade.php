					@extends('layouts.master')

					@section('content')

						<div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Form Nasabah</h3></div>
                                    <div class="panel-body">
                                    	@foreach($data_nasabah as $dn)
                                        <form class="form-horizontal" action="/nasabah/{{$dn->id_nasabah}}/update" role="form" method="post">
                                        	{{csrf_field()}}
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Nama Lengkap</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap..." value="{{$dn->nama}}" required="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Tanggal Lahir</label>
                                                <div class="col-md-10">
                                                    <input type="date" class="form-control" name="tgl_lahir" value="{{$dn->tgl_lahir}}" required="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Alamat</label>
                                                <div class="col-md-7">
                                                    <textarea class="form-control" name="alamat" rows="4" placeholder="Masukkan Alamat..."required="true">{{$dn->alamat}}</textarea>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="number" class="form-control" name="kodePos" placeholder="Masukkan Kode Pos..." value="{{$dn->kodePos}}" required="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Jenis Kelamin</label>
                                                <div class="col-sm-10">
                                                    <select name="jenKel" class="form-control">
                                                        <option value="L">Laki - Laki</option>
                                                        <option value="P">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Jenis Identitas</label>
                                                <div class="col-sm-5">
                                                    <select name="jenIdentitas" class="form-control">
                                                        <option value="ktp">KTP</option>
                                                        <option value="sim">SIM</option>
                                                        <option value="paspor">Paspor</option>
                                                        <option value="ktm">KTM</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="number" class="form-control" name="noIdentitas" placeholder="Masukkan No Identitas..." value="{{$dn->noIdentitas}}" required="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Email</label>
                                                <div class="col-md-10">
                                                    <input type="email" class="form-control" name="email" placeholder="Masukkan Email..." value="{{$dn->email}}" required="true" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">No Telepon</label>
                                                <div class="col-md-10">
                                                    <input type="number" class="form-control" name="noTelfon" placeholder="Masukkan No Telepon..." value="{{$dn->noTelfon}}" required="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Status</label>
                                                <div class="col-sm-10">
                                                    <select name="status" class="form-control">
                                                        <option value="blm_menikah">Belum Menikah</option>
                                                        <option value="menikah">Menikah</option>
                                                        <option value="janda_duda">Janda atau Duda</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <hr />
                                            <div style="float:right;">
                                            	<a href={{url('/nasabah')}} class="btn btn-danger waves-effect waves-light">Kembali</a>
	                                            <button type="submit" class="btn btn-success waves-effect waves-light">Simpan</button>
	                                        </div>
                                        </form>
                                        @endforeach
                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col -->
                        </div> <!-- End row -->

					@endsection