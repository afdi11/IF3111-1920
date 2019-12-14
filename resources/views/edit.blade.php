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
    @foreach($data as $lapor)
    <form name="forms" method="POST" action="{{ route('edit.posting', $lapor->ID) }}" >
        {{ csrf_field() }}
        <div class="form-lapor-isi">
            <textarea name="pelapor" placeholder="Dari : {{ Auth::user()->name }}" style="overflow: hidden; overflow-wrap: break-word; height: 30px; resize: none;" readonly>{{ Auth::user()->email }}</textarea>
            <textarea id="judul" name="judul" placeholder="Ketik laporan anda...(Judul)" style="overflow: hidden; overflow-wrap: break-word; height: 30px; resize: none;">{{ $lapor->judul }}</textarea>
        </div>
        <div class="form-lapor-isi">
            <textarea id="isi" name="isi" placeholder="Ceritakan keluhan anda" style="overflow: hidden; overflow-wrap: break-word; height: 210px; resize: none;">{{ $lapor->isi }}</textarea>
        </div>
        
        <select name="aspek" style="width:100%; height:40px">
            <option value="" hidden>{{ $lapor->aspek }}</option>
            @foreach($aspek as $a)
                <option value="{{$a->ID}}">{{$a->Jenis}}</option>
            @endforeach
        </select><br/><br/>
        <input name="Lampiran" type="file" accept="image/*">
        <img src="'IF3111-1920\public\images\{{ $lapor->lampiran }}" />
        @endforeach
        <div class="lapor-submit">
            <input class="lapor-button" type="submit" onclick="return validateForm()" value="Ubah"></input>
        </div>
    </form>
    </div>
</div>



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
    <!-- <div class="lapor">
      
    </div> -->
</section>

<script>
function validateForm() {
  var x = document.getElementById("judul").value;
  if (document.getElementById("judul").value == "" || document.getElementById("isi").value == "") {
    alert("Tolong Isi Semua Field");
    return false;
  }
}
</script>
@endsection
