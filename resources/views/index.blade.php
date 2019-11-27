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
  </section>

@endsection
