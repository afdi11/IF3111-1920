@extends('layout/main')

@section('title', 'Lapor ITERA')

@section('container')

  <section class="home">
    <div class="home-box">
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

    <a href="/laporan"><button type="button" name="button" class="tambah"><i class="fa fa-plus"> </i> Buat Laporan</button></a> 
   </div>
   </div>
  </section>

  <section class="containers">
    <h1 class="notop" style=" padding-bottom: 0.7em;">Cara Mengirim Laporan</h1>
    <div class="container">
      <div class="items">
        <div class="icon-wrapper">
          <i class="fa fa-pencil-square-o"></i>
        </div>
        <div class="project-name">
          <p >TULIS LAPORAN</p>
        </div>
      </div>
      <div class="items">
        <div class="icon-wrapper">
          <i class="fa fa-share"></i>
        </div>
        <div class="project-name">
          <p>PROSES VERIFIKASI</p>
        </div>
      </div>
      <div class="items">
        <div class="icon-wrapper">
          <i class="fa fa-comments"></i>
        </div>
        <div class="project-name">
          <p>TINDAK LANJUT</p>
        </div>
      </div>
      <div class="items">
        <div class="icon-wrapper">
          <i class="fa fa-check"></i>
        </div>
        <div class="project-name">
          <p>SELESAI</p>
        </div>
      </div>
    </div>
    <div class="lapor">
     <a href="/laporan"><button type="button" name="button" class="tambah2" style="margin-top: 4.5em;"><i class="fa fa-plus"> </i> Buat Laporan</button></a> 
    </div>
  </section>

  <section class="hangat">
  <div class="hangat-box">
    <h1 class="notop" style="text-align: left; padding-top: 0em; ">Laporan Terhangat</h1>

    <div class="box">
      @foreach($data as $value)
        <div class="box-post">
            <div class="title">
              <a href="">{{$value->judul}}</a>
            </div>
            <div class="isi">
              <p>{{$value->isi}}</p>
            </div>
            <a href="{{ route('post.view',  $value->ID) }}" style="color:black">Lihat Selengkapnya</a>
        </div>
        @endforeach
    </div>
    </div>
  </section>

@endsection
