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
    <form method="POST" ation="#" >
        <input name="pelapor" type=hidden value="####"></input>
        <div class="form-lapor-isi">
            <textarea name="isi" class="form-control textarea-flex autosize" placeholder="Ketik laporan anda..." style="overflow: hidden; overflow-wrap: break-word; height: 210px;"></textarea>
        </div>
        <div class="form-lapor-kategori">
            <select name="aspek">
                <option value=1>Dosen</option>
                <option value=2>Mahasiswa</option>
                <option value=3>Infrastruktur</option>
            </select>
        </div>
    </form>
    </div>
    </div>
</section>

<section class="hangat">
</section>

@endsection