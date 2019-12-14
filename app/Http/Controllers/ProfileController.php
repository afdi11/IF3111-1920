<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\user;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emails = \Auth::user()->email;
        $data['data'] = DB::table('laporan')->where('pelapor', '=', $emails )->get();
        return view('profile', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    
    public function DeletePost($id){

        DB::table('laporan')->where('id', '=', $id)->delete();
        $emails = \Auth::user()->email;
        $data['data'] = DB::table('laporan')->where('pelapor', '=', $emails )->get();
        return view('profile', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function EditViewPost($id)
    {
        $data['data'] = DB::table('laporan')->where('ID', '=', $id )->get();
        $data['aspek'] = DB::table('aspek')->get();
        return view('edit', $data);
    }
    
    public function EditPost(Request $request, $id){
        DB::table('laporan')->where('id', $id)->update([
          'pelapor'=>$request->pelapor,
          'judul'=>$request->judul,
          'isi'=>$request->isi,
          'aspek'=>$request->aspek,
          // 'lampiran'=>$request->Lampiran,
          // 'Waktu'=>NOW()
          ]);
          
        return redirect('/profile');
       }
    
    
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
