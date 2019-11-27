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
    <h1 style="padding-top: 0; padding-bottom: 1em;">Cara Mengirim Laporan</h1>
    <ul class="progressbar">
     <li class="active" >Tulis Laporan</li>
     <li>Proses Verifikasi</li>
     <li>Proses Tindak Lanut</li>
     <li>Selesai</li>
   </ul>
  </section>

@endsection
