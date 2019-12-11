<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\User;
use App\Laporan;


class HomeController extends Controller
{

     function index(){
      // $data['data'] = Laporan::all();
       $data['data'] = DB::table('laporan')->get();
         return view('index', $data);
     }
}




?>
