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
                                    <li class="active">Data Nasabah</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Data Nasabah</h3>
                                    </div>
                                    <div> 
                                        <a href="/nasabah/cetak_nasabah" class="btn btn-primary btn-sm" style="float: middle;margin:20px;">Print</a>
                                        <a href="{{url('/nasabah/form')}}" type="button" class="btn btn-success btn-sm" style="float: right;margin:20px;">
                                            <i class="fa fa-plus"></i>Tambah Nasabah Baru
                                        </a>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <table id="data-nasabah" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Nama</th>
                                                            <th>TTL</th>
                                                            <th>Alamat</th>
                                                            <th>Gender</th>
                                                            <th>Email</th>
                                                            <th>No Telfon</th>
                                                            <th>Status</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        @foreach($data_nasabah as $nasabah)
                                                        <tr>
                                                            <td>{{$nasabah->nama}}</td>
                                                            <td>{{$nasabah->tgl_lahir}}</td>
                                                            <td>{{$nasabah->alamat}}</td>
                                                            <td>{{$nasabah->jenKel}}</td>
                                                            <!--@if($nasabah->jenKel == 'L')
                                                                <td><span class="label label-info">Laki - Laki</span></td>
                                                            @else
                                                                <td><span class="label label-danger">Perempuan</span></td>
                                                            @endif -->
                                                            <td>{{$nasabah->email}}</td>
                                                            <td>{{$nasabah->noTelfon}}</td>
                                                            <td>{{$nasabah->status}}</td> 
                                                            <!--@if($nasabah->status == 'blm_menikah')
                                                                <td><span class="label label-info">Belum Menikah</span></td>
                                                            @elseif($nasabah->status == 'menikah')
                                                                <td><span class="label label-danger">Menikah</span></td>
                                                            @elseif($nasabah->status == 'janda_duda')
                                                                <td><span class="label label-purple">Janda atau Duda</span></td>
                                                            @endif-->
                                                            <td>
                                                                <a href="/nasabah/{{ $nasabah->id_nasabah }}/edit" class="btn btn-warning btn-sm">Edit</a>

                                                                <a href="/nasabah/{{ $nasabah->id_nasabah }}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Hapus Permanen?')">Delete</a>
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

