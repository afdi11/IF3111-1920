@extends('layout/main')

@section('title', 'Lapor ITERA')

@section('container')

  <section class="home">
    <h1 style="">Layanan Aspirasi Masyarakat ITERA</h1>
    <h2>Sampaikan laporan Kamu langsung kepada KM ITERA</h2>

    <div class="wrap">
     <div class="search">
        <input type="text" class="searchTerm" placeholder="Masukkan Kata Kunci Atau ID Laporan">
        <button type="submit" class="searchButton">
          <i class="fa fa-search" style=""></i>
       </button>
     </div>
   </div>

   <div class="lapor" >

     <button type="button" name="button" class="tambah"><i class="fa fa-plus"> </i> Tambah Laporan</button>
   </div>

  </section>

  <section class="container">
    <h1 class="notop" style=" padding-bottom: 2.5em;">Cara Mengirim Laporan</h1>
    <ul class="progressbar">
     <li class="active"> <i class="fa fa-pencil-square-o"> </i> <br> <b>Tulis Laporan</b> <br> <br> <span style="color:black"> Laporkan Keluhan atau Aspirasi Kamu Dengan Jelas dan Lengkap </span> </li>
     <li> <i class="fa fa-share fa-6"> </i> <br> Proses Verifikasi <br> <br> <span style="color:black"> Dalam Waktu 3 Hari Laporan Kamu Akan diverfikasi dan diteruskan Ke KM ITERA </span></li>
     <li><i class="fa fa-comments fa-6"> </i> <br> Proses Tindak Lanut <br> <br> <span style="color: black"> Dalam 5 hari, KM ITERA akan menindaklanjuti dan membalas laporan Kamu</span></li>
     <li><i class="fa fa-check fa-6"> </i> <br> Selesai <br> <br> <span style="color: black"> Laporan Kamu akan terus ditindaklanjuti hingga terselesaikan </span> </li>
   </ul>
  </section>

  <section class="hangat">
    <h1 class="notop" style="text-align: left; padding-top: 5em; padding-left: 3em">Laporan Terhangat</h1>
  </section>

@endsection
