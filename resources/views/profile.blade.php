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

<div style="margin-left: 6em;">
    <h1 style="text-align: left; padding-top: 0em;">Laporan Anda</h1>
    <div class="user-box" style="">
        <div class="boxs">
            <div class="title">
                <a href="" style="color: black; font-size: 24pt;">WALALALA</a>
            </div>
            <div class="isi" style="padding-top: 1em;">
                <p >Tesasdssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssssssssssssssssssssssssssss</p>
            </div>
        </div>    
     </div>
</div>
@endsection

