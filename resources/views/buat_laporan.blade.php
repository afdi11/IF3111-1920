@extends('layout/main')

@section('title', 'Buat Laporan')

@section('container')

<section class="home">
    <div class="home-box">
    <h1 style="">Layanan Aspirasi Masyarakat ITERA</h1>
    <h2>Sampaikan laporan/komentarmu!</h2>
    </div>
</section>

<section class="containers">
<div class="container">
    <div class="form-lapor">
    <form method="POST" action="/laporan/tambah" >
        {{ csrf_field() }}
        <input name="pelapor" type=hidden value="anonim"></input>
        
        <div class="form-lapor-isi">
            <textarea name="judul" placeholder="Ketik laporan anda...(Judul)" style="overflow: hidden; overflow-wrap: break-word; height: 30px;"></textarea>
        </div>

        <div class="form-lapor-isi">
            <textarea name="isi" placeholder="Ceritakan keluhan anda" style="overflow: hidden; overflow-wrap: break-word; height: 210px;"></textarea>
        </div>

        <select name="aspek" style="width:100%; height:40px">
            <option value="" hidden>Pilih aspek laporan</option>
            @foreach($aspek as $a)
                <option value="{{$a->ID}}">{{$a->Jenis}}</option>
            @endforeach
        </select><br/><br/>
        <input name="Lampiran" type="file" accept="image/*">

        <div class="lapor-submit">
            <input class="lapor-button" type="submit" value="LAPOR!"></input>
        </div>
    </form>
    </div>
</div>

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
        @foreach($data as $value)
        <div class="box-post">
            <div class="title">
                <a href="">{{$value->judul}}</a>
            </div>
            <div class="isi">
                <p>{{$value->isi}}</p>
            </div>
        </div>
        @endforeach
    </div>
</section>

@endsection
