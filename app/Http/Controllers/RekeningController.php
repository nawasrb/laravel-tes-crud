<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Transaksi;


class RekeningController extends Controller
{
   public function index()
   {
   	$rekening = \App\Rekening::all();
   	return view('rekening.index',['rekening'=> $rekening]);
   }
   public function form(){
   return view('rekening.tambahrekening');
}

//public function totalSaldo($jumTRAN){
//   $jumTRAN = new $transaksi->jumTRAN;
//   $data = DB::table('rekening')
//            ->join('nasabah','id_nasabah','=','rekening.id_nasabah')
//            ->join('transaksi','id_nasabah','=','rekening.id_nasabah')
//}

public  function create (Request $request){

 	$rekening = new \App\Rekening;
   $rekening->id_nasabah=$request->id_nasabah;
   $rekening->nama=$request->nama;
 	$rekening->noREK=$request->noREK;
 	$rekening->tglBuka=$request->tglBuka;
 	$rekening->statusREK=$request->statusREK;
 	$rekening->save();
   //dd($rekening);
 	return redirect('/rekening')->with('message', 'Data Berhasil diinput!');
   }

public function edit($id)
{
	$rekening = DB::table('rekening')->where('id', $id)->first();
	return view('rekening.editrekening',['rekening' => $rekening]);
}
 public function update(Request $request)
 {
 	// return redirect('/rekening');
   DB::table('rekening')->where('id',$request->id)->update([
      'id_nasabah'=>$request->id_nasabah,
      'nama'=>$request->nama,
      'noREK' => $request->noREK,
      'tglBuka' => $request->tglBuka,
      'statusREK' => $request->statusREK,
   ]);

   return redirect('/rekening')->with('message', 'Data Berhasil diupdate!');
 }

 public function delete($id)
 {
 	$rekening = \App\Rekening::find($id);
 	$rekening->delete();
 	return redirect('/rekening')->with('message_delete', 'Data Berhasil dihapus!');
 }

 public function profile($id)
 {
 	$rekening = \App\Rekening::find($id);
 	return view('rekening.profile',['rekening' => $rekening]);
 }
}
