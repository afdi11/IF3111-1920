<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        'Pelapor'=>$request->pelapor,
        'judul'=>$request->judul,
        'isi'=>$request->isi,
        'aspek'=>$request->aspek,
        'lampiran'=>$request->Lampiran,
        'Waktu'=>NOW()
        ]);
      return redirect('/laporan');
     }
}
?>