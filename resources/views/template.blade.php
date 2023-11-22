<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("tittle")</title>
    <link rel="stylesheet" href="{{ url('bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
    <style>
        ul.li.a{
            text-decoration: none;
        }
    </style>
    <ul class="nav  navbar-dark bg-dark">
        <li class="nav-item">
            <a href="{{url('/')}}" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
            <a href="{{url('profil')}}" class="nav-link">Profile</a>
        </li>
        <li class="nav-item">
            <a href="{{url('kontak')}}" class="nav-link">Kontak</a>
        </li>
        <li class="nav-item">
            <a href="{{url('data-pegawai')}}" class="nav-link">Data Pegawai</a>
        </li>
        
    </ul>
    <div class="container">
    <h1>@yield("tittle")</h1>
    <hr>

    @if(session()->has("pesan"))
    <div class="alert alert-info">
        {{session("pesan")}}
    </div>
    @endif

    @yield("content")
    </div>
    <script src="{{ url('/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>