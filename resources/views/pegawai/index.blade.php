		@extends('layouts.master')

				@section('content')
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    @if(session()->has('message_delete'))
                        <div class="alert alert-danger">
                            {{ session()->get('message_delete') }}
                        </div>
                    @endif
                    <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <ol class="breadcrumb pull-left">
                                    <li>Master Data</a></li>
                                    <li class="active">Data Pegawai</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Data Pegawai</h3>
                                    </div>
                                    <div> 
                                        <a href="{{url('/pegawai/form')}}" type="button" class="btn btn-success btn-sm" style="float: right;margin:20px;">
                                            <i class="fa fa-plus"></i>Tambah Pegawai Baru
                                        </a>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <table id="data-nasabah" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Nama</th>
                                                            <th>Gender</th>
                                                            <th>Tanggal Lahir</th>
                                                            <th>Agama</th>
                                                            <th>Email</th>
                                                            <th>Alamat</th>
                                                            <th>No Telfon</th>
                                                            <th>Jabatan</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        @foreach($data_pegawai as $data_pegawai)
                                                        <tr>
                                                            <td>{{$data_pegawai->nama}}</td>
                                                            <td>{{$data_pegawai->jenKel}}</td>
                                                            <td>{{$data_pegawai->tgl_lahir}}</td>
                                                            <td>{{$data_pegawai->agama}}</td>
                                                            <td>{{$data_pegawai->email}}</td>
                                                            <td>{{$data_pegawai->alamat}}</td>
                                                            <td>{{$data_pegawai->no_telp}}</td>
                                                            <td>{{$data_pegawai->jabatan}}</td>
                                                            <td>
                                                                <a href="/pegawai/{{ $data_pegawai->id_pegawai }}/edit" class="btn btn-warning btn-sm">Edit</a>

                                                                <a href="/pegawai/{{ $data_pegawai->id_pegawai }}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Hapus Permanen?')">Delete</a>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div> 
                    <!-- End Row -->
				@endsection

