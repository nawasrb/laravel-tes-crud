<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
   public function index()
   {
   	$data_pegawai = \App\Pegawai::all();
   	return view('pegawai.index',['data_pegawai'=> $data_pegawai]);
   }
   
   public function form(){
   	return view('pegawai.tambahpegawai');
   }
 public  function create (Request $request)
 {
   
   //insert ke table user
  $users = new \App\User;
  $users->role = $request->jabatan;
  $users->name = $request->nama;
  $users->email = $request->email;
  $users->password = bcrypt($request->password);
  $users->remember_token = str_random(100);
  $users->save();

  $id_user=$users->id;
  $pegawai = new \App\Pegawai;
  $pegawai->user_id=$id_user;
  $pegawai->nama=$request->nama;
  $pegawai->jenKel=$request->jenKel;
  $pegawai->tgl_lahir=$request->tgl_lahir;
  $pegawai->agama=$request->agama;
  $pegawai->alamat=$request->alamat;
  $pegawai->no_telp=$request->no_telp;
  $pegawai->jabatan=$request->jabatan;
  $pegawai->status=$request->status;
  $pegawai->save();

 	return redirect('/pegawai')->with('message', 'Data Berhasil diinput!');
}

public function edit($id_pegawai, $id)
{
	$pegawai = DB::table('data_pegawai', 'users')->where('id_pegawai', $id_pegawai)->get();
	return view('pegawai/edit',['data_pegawai', 'users' => $pegawai]);
}
 public function update(Request $request)
 {
 	
   DB::table('data_pegawai','users')->where('id_pegawai', $request->id_pegawai)->update([
  
  'role' = $request->jabatan,
  'name' = $request->nama,
  'email' = $request->email,
  'password' = bcrypt($request->password),
  'remember_token' = str_random(100),

  'user_id'=$id_user,
  'nama'=$request->nama,
  'jenKel'=$request->jenKel,
  'tgl_lahir'=$request->tgl_lahir,
  'agama'=$request->agama,
  'alamat'=$request->alamat,
  'no_telp'=$request->no_telp,
  'jabatan'=$request->jabatan,
  'status'=$request->status
   ]);
   // alihkan halaman ke halaman pegawai
   // javascript::alert('Data berhasil diupdate');
   return redirect('/pegawai')->with('message', 'Data Berhasil diupdate!');
 }

 public function delete($id_pegawai)
 {
 	$pegawai = \App\Pegawai::find($id_pegawai);
 	$pegawai->delete();
 	return redirect('/pegawai')->with('message_delete', 'Data Berhasil dihapus!');
 }

 public function profile($id_pegawai)
 {
 	$pegawai = \App\Pegawai::find($id_pegawai);
 	return view('pegawai.profile',['pegawai' => $pegawai]);
 }
}
