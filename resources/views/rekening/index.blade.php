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
                                    <li>Rekening</a></li>
                                    <li class="active">Data Rekening</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Data Rekening</h3>
                                    </div>
                                    <div> 
                                        <a href="{{url('/rekening/form')}}" type="button" class="btn btn-success btn-sm" style="float: right;margin:20px;">
                                            <i class="fa fa-plus"></i>Tambah Data Rekening
                                        </a> 
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <table id="rekening" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Nasabah ID</th>
                                                            <th>Nama Pemilik</th>
                                                            <th>No Rekening</th>
                                                            <th>Tanggal Buka</th>
                                                            <th>Status Rekening</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                     <!--menampilkan database ke index.blade-->
                                                    <tbody>
                                                        @foreach($rekening as $rekening)
                                                        <tr>
                                                            <td><a href="/rekening/{{$rekening->id}}/edit">         {{$rekening->id_nasabah}}</a></td>

                                                            <td>{{$rekening->nama}}</td>
                                                            <td>{{$rekening->noREK}}</td>
                                                            <td>{{$rekening->tglBuka}}</td>
                                                            <td>{{$rekening->statusREK}}</td>
                                                            <td>
                                                                <a href="/rekening/{{ $rekening->id }}/edit" class="btn btn-warning btn-sm">Edit</a>

                                                                <a href="/rekening/{{ $rekening->id }}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Hapus Permanen?')">Delete</a>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div> 
                    <!-- End Row -->
				@endsection

