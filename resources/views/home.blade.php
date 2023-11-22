@extends("template")

@section("tittle")
Home
@endsection

@section("content")
<img src="{{url('/assets/micaki.jpeg')}}" class="img-fluid">
<hr>
<img src="{{url('/assets/p.jpeg')}}" class="img-fluid">
<hr>
<<div class="jumbotron jumbotron-fluid text-center">
    <div class="container">
        <h1 class="display-4">Selamat Datang di Wisata Indonesia</h1>
        <p class="lead">Temukan keindahan dan keunikan tempat wisata di seluruh Indonesia.</p>
    </div>
</div>
@endsection