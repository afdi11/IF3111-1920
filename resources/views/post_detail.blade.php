@extends('layout/main')

@section('title', 'Buat Laporan')

@section('container')

<section class="home">
    <div class="home-box">
      <h1 style="">Detail Laporan</h1>
    </div>
</section>

<section class="containers">
<div class="container">
    <div class="form-lapor">
    @foreach($data as $lapor)
        <div class="form-lapor-isi">
            <textarea name="pelapor" placeholder="Dari : {{ Auth::user()->name }}" style="overflow: hidden; overflow-wrap: break-word; height: 30px; resize: none;" readonly>{{ Auth::user()->email }}</textarea>
            <textarea name="judul" placeholder="Ketik laporan anda...(Judul)" style="overflow: hidden; overflow-wrap: break-word; height: 30px; resize: none;" readonly>{{ $lapor->judul }}</textarea>
        </div>
        <div class="form-lapor-isi">
            <textarea name="isi" placeholder="Ceritakan keluhan anda" style="overflow: hidden; overflow-wrap: break-word; height: 210px; resize: none;" readonly>{{ $lapor->isi }}</textarea>
        </div>
        @endforeach
        
            <a style="color: black">Aspek : {{ $lapor->aspek }} <br> </a>
        
        <a href="" style="color: black">Lampiran : {{ $lapor->lampiran }}</a>
    </form>
    </div>
</div>
@endsection