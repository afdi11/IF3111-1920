<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AuthController;
use App\User;


class LaporanController extends Controller
{
    
     function form(){
      $data['data'] = DB::table('laporan')->get();
      $data['aspek'] = DB::table('aspek')->get();
        return view('buat_laporan', $data);
     }
   
     public function tambah(Request $request){
      DB::table('laporan')->insert([
        'pelapor'=>$request->pelapor,
        'judul'=>$request->judul,
        'isi'=>$request->isi,
        'aspek'=>$request->aspek,
        'lampiran'=>$request->Lampiran,
        'Waktu'=>NOW()
        ]);
        if ($request->file('Lampiran')){
          $filename=time();
          $fileName   = time() . '.' . $request->file('Lampiran')->getClientOriginalExtension();
          $file = $request->file('Lampiran')->move('images', $fileName);
          }
        
        // $no++;
        
      return redirect('/laporan');
     }

     public function ViewPost($id){

      $data['data'] = DB::table('laporan')->where('ID', '=', $id)->get();
      $data['aspek'] = DB::table('aspek')->get();
      return view('post_detail', $data);
     }
}
?>