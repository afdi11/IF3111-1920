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
  </section>

  <section class="hangat">
    <h1 class="notop" style="text-align: left; padding-top: 5em; padding-left: 3em">Laporan Terhangat</h1>
    <div class="box">
        <div class="box-post">
            <div class="title">
              <a href="#">Saran Akreditasi pada Pendaftaran CPNS</a>
            </div>
            <div class="isi">
              <p>Assalamualaikum pak, saya mewakili seluruh calon pelamar cpns 2019 ingin meminta agar peraturan kemenpan rb mengenai akreditasi tidak pada saat kelulusan, karena banyak juga calon peserta yang pada saat lulus perguruan tinggi atau program studinya belum terakreditasi..jadi mohon agar di pertimbangkan terkait hal tersebut, agar tidak ada yg dirugikan..agar terwujud sila ke 5 keadilan bagi seluruh rakyat indonesia...</p>
            </div>
        </div>
        <div class="box-post">
            <div class="title">
              <a href="#">Saran Akreditasi pada Pendaftaran CPNS</a>
            </div>
            <div class="isi">
              <p>Assalamualaikum pak, saya mewakili seluruh calon pelamar cpns 2019 ingin meminta agar peraturan kemenpan rb mengenai akreditasi tidak pada saat kelulusan, karena banyak juga calon peserta yang pada saat lulus perguruan tinggi atau program studinya belum terakreditasi..jadi mohon agar di pertimbangkan terkait hal tersebut, agar tidak ada yg dirugikan..agar terwujud sila ke 5 keadilan bagi seluruh rakyat indonesia...</p>
            </div>
        </div>
        <div class="box-post">
            <div class="title">
              <a href="#">Saran Akreditasi pada Pendaftaran CPNS</a>
            </div>
            <div class="isi">
              <p>Assalamualaikum pak, saya mewakili seluruh calon pelamar cpns 2019 ingin meminta agar peraturan kemenpan rb mengenai akreditasi tidak pada saat kelulusan, karena banyak juga calon peserta yang pada saat lulus perguruan tinggi atau program studinya belum terakreditasi..jadi mohon agar di pertimbangkan terkait hal tersebut, agar tidak ada yg dirugikan..agar terwujud sila ke 5 keadilan bagi seluruh rakyat indonesia...</p>
            </div>
        </div>
    </div>
  </section>

@endsection
