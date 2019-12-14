<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\User;


class HomeController extends Controller
{

     function index(){
       $data['data'] = DB::table('laporan')->get();
         return view('index', $data);
     }
}




?>
