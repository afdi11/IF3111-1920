@extends('layout/main')

@section('title', 'Profile - LAPOR ITERA!')

@section('container')

<section class="pr-back">
    <div class="home-box">
        <h1>{{ Auth::user()->name }}</h1>
        <img class="avatar" src="{{ asset('image/avatar.jpg') }}" alt="">
    </div>
    <div class="ubahs">
        <a class="ubah" href="/laporan" >Buat Laporan</a>
    </div>
    
</section>

<section class="">
    <div style="margin-left: 6em;">
        <h1 style="text-align: left; padding-top: 0em;">Laporan Anda</h1>
        @foreach($data as $value)
        <div class="user-box" style="">
            <div class="boxs">
                <div class="title">
                    <a href="" style="color: black; font-size: 24pt;">{{$value->judul}}</a>
                </div>
                <div class="isi" style="padding-top: 1em; padding-bottom: 2em;">
                    <p >{{$value->isi}}</p>
                </div>
                <a href="" style=" color: black; font-size: 12pt;">Edit</a>
                <a onclick="return ConfDelete()" href="{{ route('delete.post',  $value->ID) }}" style=" padding-left: 2em; color: red; font-size: 12pt;">Delete</a>
            </div>    
        </div>
        @endforeach
    </div>
</section>

@endsection

<script>
    function ConfDelete() {
        if (confirm("Yakin Mau Menghapus Laporan Ini?")) {
            return true;
        } else {
            return false;
        }
    }
</script>



