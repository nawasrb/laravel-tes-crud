<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class NasabahController extends Controller
{
   public function index(Request $request)
   {
   	$data_nasabah = \App\Nasabah::all();
   	return view('nasabah.index',['data_nasabah'=> $data_nasabah]);
   }
   
   public function form(){
   	return view('nasabah.tambahnasabah');
   }
 public  function create (Request $request){

 	$data_nasabah = new \App\Nasabah;
 	$data_nasabah->nama=$request->nama;
 	$data_nasabah->tgl_lahir=$request->tgl_lahir;
 	$data_nasabah->alamat=$request->alamat;
 	$data_nasabah->kodePos=$request->kodePos;
 	$data_nasabah->jenKel=$request->jenKel;
 	$data_nasabah->jenIdentitas=$request->jenIdentitas;
 	$data_nasabah->noIdentitas=$request->noIdentitas;
 	$data_nasabah->email=$request->email;
 	$data_nasabah->noTelfon=$request->noTelfon;
 	$data_nasabah->status=$request->status;
 	$data_nasabah->save();
 	return redirect('/nasabah')->with('message', 'Data Berhasil diinput!');
   }

public function edit($id_nasabah)
{
	$data_nasabah = DB::table('data_nasabah')->where('id_nasabah', $id_nasabah)->get();
	return view('nasabah/edit',['data_nasabah' => $data_nasabah]);
}
 public function update(Request $request)
 {
 	// return redirect('/nasabah');
   DB::table('data_nasabah')->where('id_nasabah',$request->id_nasabah)->update([
      'nama' => $request->nama,
      'tgl_lahir' => $request->tgl_lahir,
      'alamat' => $request->alamat,
      'kodePos' => $request->kodePos,
      'jenKel' => $request->jenKel,
      'jenIdentitas' => $request->jenIdentitas,
      'noIdentitas' => $request->noIdentitas,
      'email' => $request->email,
      'noTelfon' => $request->noTelfon,
      'status' => $request->status
   ]);
   // alihkan halaman ke halaman pegawai
   // javascript::alert('Data berhasil diupdate');
   return redirect('/nasabah')->with('message', 'Data Berhasil diupdate!');
 }

 public function delete($id_nasabah)
 {
 	$data_nasabah = \App\Nasabah::find($id_nasabah);
 	$data_nasabah->delete();
 	return redirect('/nasabah')->with('message_delete', 'Data Berhasil dihapus!');
 }

 public function cetak_nasabah()
{
  $data_nasabah = \App\Nasabah::all();
 
  $pdf = PDF::loadview('nasabah.cetak_nasabah',['data_nasabah'=>$data_nasabah]);
  return $pdf->stream('cetak_nasabah');
}

 public function profile($id_nasabah)
 {
 	$data_nasabah = \App\Nasabah::find($id_nasabah);
 	return view('nasabah.profile',['nasabah' => $data_nasabah]);
 }
}
