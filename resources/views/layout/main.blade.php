<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>@yield('title')</title>
  </head>

  <body>
    <div class="header">
    </div>
    <header>
      <img class="logo" src="{{ asset('image/logo.png') }}" style="width: 15%" alt="">
      <nav>
        <ul class="nav__links">
          <li> <a href="/">Home</a> </li>
          <li> <a href="#">Buat Laporan</a> </li>
        </ul>
      </nav>
      <a class="lain" href="#" >DAFTAR</a>
      <button type="button" name="button">MASUK</button>
    </header>
  </div>
  </body>
</html>
