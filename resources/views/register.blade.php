<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>@yield('title')</title>
  </head>

  <body>
  <div id="myHeader" class="header" style="margin: 0; background-color: #262626;">
    <header>
      <img href="/" class="logo" src="{{ asset('image/logo.png') }}" style="width: 15%" alt="">
      <nav>
        <ul class="nav__links">
          <li> <a href="/">Home</a> </li>
          <li> <a href="/laporan">Buat Laporan</a> </li>
        </ul>
      </nav>
      <a class="lain" href="/register" >DAFTAR</a>
      <a href="/login"><button type="button" name="button">MASUK</button> </a> 
    </header>
  </div>


    <div class="login">
        <h1 style="padding-top: 2.5em;">REGISTER</h1>
        <form class="form-login" action="{{ route('register') }}" method="POST">
        @csrf
        <input class="inputLogin" type="email" placeholder="Email"> </input>
        <input class="inputLogin" type="text" placeholder="Nama"> </input>
        <input class="inputLogin" type="password" placeholder="Password"> </input>
        <input class="inputLogin" type="confpassword" placeholder="Confirm Password"> </input>
        <button type="submit" class="submitButton"> REGISTER </button>
        <a href="/login" style=""> Sudah Punya Akun? <b>LOGIN</b> </a>
        </form>
    </div>
  </body>
</html>
