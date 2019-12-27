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
                                    <li class="active">Data Ahli Waris</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Data Ahli Waris</h3>
                                    </div>
                                    <div> 
                                        <a href="{{url('/waris/form')}}" type="button" class="btn btn-success btn-sm" style="float: right;margin:20px;">
                                            <i class="fa fa-plus"></i>Tambah Ahli Waris Baru
                                        </a>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <table id="data-nasabah" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Nama</th>
                                                            <th>ID Nasabah</th>
                                                            <th>Hubungan </th>
                                                            <th>Nama Ibu</th>
                                                            <th>Alamat Waris</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        @foreach($data_waris as $data_waris)
                                                        <tr>
                                                            <td>{{$data_waris->namaAW}}</td>
                                                            <td>{{$data_waris->id_nasabah}}</td>
                                                            <td>{{$data_waris->hubungan}}</td>
                                                            <td>{{$data_waris->ibuKandung}}</td>
                                                            <td>{{$data_waris->alamatAW}}</td>
                                                            <td>
                                                                <a href="/waris/{{ $data_waris->id_ahliwaris }}/edit" class="btn btn-warning btn-sm">Edit</a>

                                                                <a href="/waris/{{ $data_waris->id_ahliwaris }}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Hapus Permanen?')">Delete</a>
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

