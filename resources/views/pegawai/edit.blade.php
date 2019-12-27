					@extends('layouts.master')

					@section('content')

						<div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Form Pegawai</h3></div>
                                    <div class="panel-body">
                                    	@foreach($data_pegawai as $dp)
                                        <form class="form-horizontal" action="/pegawai/{{$dp->id_pegawai}}/update" role="form" 
                                            method="post">
                                        	{{csrf_field()}}
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Nama Lengkap</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap..." value="{{$dp->nama}}" required="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Email</label>
                                                <div class="col-md-10">
                                                    <input type="email" class="form-control" name="email" placeholder="Masukkan Email..." value="{{$dp->email}} required="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Password</label>
                                                <div class="col-md-10">
                                                    <input type="password" class="form-control" name="password" placeholder="Masukkan Password..." required="true">
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
                                                <label class="col-md-2 control-label">Tanggal Lahir</label>
                                                <div class="col-md-10">
                                                    <input type="date" value="{{$dp->tgl_lahir}}" class="form-control" name="tgl_lahir" required="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Agama</label>
                                                <div class="col-sm-10">
                                                    <select name="agama" class="form-control" >
                                                        <option value="islam">Islam</option>
                                                        <option value="kristen">Kristen Protestan</option>
                                                        <option value="katolik">Katolik</option>
                                                        <option value="hindu">Hindu</option>
                                                        <option value="buddha">Buddha</option>
                                                        <option value="konghuchu">Kong Hu Cu</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Alamat</label>
                                                <div class="col-md-10">
                                                    <textarea class="form-control" name="alamat" rows="4" placeholder="Masukkan Alamat..." required="true">{{$dp->alamat}}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">No Telepon</label>
                                                <div class="col-md-10">
                                                    <input type="number" value="{{$dp->no_telp}}" class="form-control" name="no_telp" placeholder="Masukkan No Telepon..." required="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Jabatan</label>
                                                <div class="col-md-10">
                                                    <input type="text" value="{{$dp->jabatan}}" class="form-control" name="jabatan" placeholder="Masukkan Jabatan..." required="true" autocomplete="off">
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
                                            	<a href={{url('/pegawai')}} class="btn btn-danger waves-effect waves-light">Kembali</a>
	                                            <button type="submit" class="btn btn-success waves-effect waves-light">Simpan</button>
	                                        </div>
                                        </form>
                                        @endforeach
                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col -->
                        </div> <!-- End row -->

					@endsection