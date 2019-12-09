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
            <textarea name="isi" placeholder="Ketik laporan anda..." style="overflow: hidden; overflow-wrap: break-word; height: 210px;"></textarea>
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
</section>

<section class="hangat">
</section>

@endsection