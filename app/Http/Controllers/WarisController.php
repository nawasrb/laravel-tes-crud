<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WarisController extends Controller
{
   public function index()
   {
      $data_waris = \App\Waris::all();
      return view('waris.index',['data_waris'=> $data_waris]);
   }
   
   public function form(){
      return view('waris.tambahwaris');
   }
 public function create(Request $request){

   DB::table('data_ahliwaris')->insert([
      'namaAW' => $request->namaAW,
      'id_nasabah'=>$request->id_nasabah,
      'jenIdentitasAW' => $request->jenIdentitasAW,
      'noIdentitasAW' => $request->noIdentitasAW,
      'hubungan' => $request->hubungan,
      'ibuKandung' => $request->ibuKandung,
      'alamatAW' => $request->alamatAW
   ]);
   // alihkan halaman ke halaman pegawai
   return redirect('/waris')->with('message', 'Data Berhasil diinput!');
}

public function edit($id_ahliwaris)
{
   $waris = DB::table('data_ahliwaris')->where('id_ahliwaris', $id_ahliwaris)->get();
   return view('waris/edit',['data_waris' => $waris]);
}
 public function update(Request $request)
 {
   DB::table('data_ahliwaris')->where('id_ahliwaris',$request->id_ahliwaris)->update([
      'namaAW' => $request->namaAW,
      'id_nasabah'=>$request->id_nasabah,
      'jenIdentitasAW' => $request->jenIdentitasAW,
      'noIdentitasAW' => $request->noIdentitasAW,
      'hubungan' => $request->hubungan,
      'ibuKandung' => $request->ibuKandung,
      'alamatAW' => $request->alamatAW
   ]);
   // alihkan halaman ke halaman pegawai
   // javascript::alert('Data berhasil diupdate');
   return redirect('/waris')->with('message', 'Data Berhasil diupdate!');
 }

 public function delete($id_ahliwaris)
 {
   DB::table('data_ahliwaris')->where('id_ahliwaris', $id_ahliwaris)->delete();
   return redirect('/waris')->with('message_delete', 'Data Berhasil dihapus!');
 }

 public function profile($id_ahliwaris)
 {
   $waris = \App\Waris::find($id_ahliwaris);
   return view('waris.profile',['waris' => $waris]);
 }
}
