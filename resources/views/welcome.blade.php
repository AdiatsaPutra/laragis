<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <title>Laravel</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <img class="logo" src="{{ asset('img/logo.png') }}">
    </div>
  </nav>
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1>SELAMAT DATANG</h1>
      <p class="lead">Segera buat akun anda dan daftarkan ke aplikasi untuk
        menggunakan serta menikmati fitur yang tersedia</p>
      <a type="button" class="btn btn-primary" href="{{ route('register') }}">DAFTARKAN SEKARANG</a><br><br>
      <p class="lead">Sudah Punya Akun?</p>
      <a type="button" class="btn btn-primary" href="{{ route('login') }}">Login</a><br><br>
    </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
  </script>
</body>

</html>