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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand ml-3" href="#">Wisata Indonesia</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/data-wisata') }}">Data Wisata</a>
                </li>
            </ul>
        </div>
    </nav>
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