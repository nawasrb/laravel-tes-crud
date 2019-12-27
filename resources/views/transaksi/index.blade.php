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
                                    <li>Transaksi</a></li>
                                    <li class="active">Data Transaksi</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Data Transaksi</h3>
                                    </div>
                                    <div>
                                        <a href="/transaksi/cetak_pdf" class="btn btn-primary btn-sm" style="float: middle;margin:20px;">Print</a>
                                        <a href="{{url('/transaksi/form')}}" type="button" class="btn btn-success btn-sm" style="float: right;margin:20px;">
                                            <i class="fa fa-plus"></i>Setor</a> 
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <table id="transaksi" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Pegawi ID</th>
                                                            <th>Nama</th>
                                                            <th>No Rekening</th>
                                                            <th>Setoran Awal</th>
                                                            <th>Jenis Transaksi</th>
                                                            <th>Tanggal Transaksi</th>
                                                            <th>Jumlah Transaksi</th>
                                                            <th>Saldo</th>     
                                                        </tr>
                                                    </thead>

                                                    <!--menampilkan database ke index.blade-->
                                                    <tbody>
                                                        @foreach($transaksi as $transaksi)
                                                        <tr>
                                                            <td>{{$transaksi->id_pegawai}}</td>
                                                            <td>{{$transaksi->nama}}</td>
                                                            <td>{{$transaksi->noREK}}</td>
                                                            <td>{{$transaksi->setoranAwal}}</td>
                                                            <td>{{$transaksi->jenTRAK}}</td>
                                                            <td>{{$transaksi->tglTRAN}}</td>
                                                            <td>{{$transaksi->jumTRAN}}</td>
                                                            <td>{{$transaksi->saldo}}</td>
                                                            
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

