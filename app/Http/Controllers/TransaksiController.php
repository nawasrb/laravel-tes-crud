<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;
use App\Transaksi;

class TransaksiController extends Controller
{
   public function index()
   {
   
   	$transaksi = \App\Transaksi::all();
   	return view('transaksi.index',['transaksi'=> $transaksi]);
   }
   



   public function form(){
       $data=DB::table('rekening')->get(); 
   return view('transaksi.tambahtransaksi',compact('data'));
   }
   public  function create (Request $request)
   {

  	$transaksi = new \App\Transaksi;
    $transaksi->id_pegawai=$request->id_pegawai;
    $transaksi->id_nasabah=$request->id_nasabah;
    $transaksi->nama=$request->nama;
  	$transaksi->noREK=$request->noREK;
    $transaksi->setoranAwal=$request->setoranAwal;
  	$transaksi->jenTRAK=$request->jenTRAK;
  	$transaksi->tglTRAN=$request->tglTRAN;
  	$transaksi->jumTRAN=$request->jumTRAN;
    $transaksi->saldo=$request->saldo;
  	$transaksi->save();
  	return redirect('/transaksi')->with('message', 'Transaksi Berhasil diinput!');
    }

public function cetak_pdf()
{
  $transaksi = Transaksi::all();
 
  $pdf = PDF::loadview('transaksi.cetak_pdf',['transaksi'=>$transaksi]);
  return $pdf->stream('cetak_pdf');
}

public function cetak_transaksi()
{
  $transaksi = Transaksi::all();
 
  $pdf = PDF::loadview('transaksi.cetak_transaksi',['transaksi'=>$transaksi]);
  return $pdf->stream('cetak_transaksi');
}

  public function profile($id)
  {
  	$transaksi = \App\Transaksi::find($id);
  	return view('transaksi.profile',['transaksi' => $transaksi]);
  }
}
