@extends("template")

@section("tittle")
Data Wisata
@endsection

@section("content")
<H2 class="text-center">Welcome</H2><br><br>
<a href="{{url('tambah-wisata')}}" class="btn btn-sm btn-primary">TAMBAH</a>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th class="text-center">No.</th>
            <th class="text-center">Nama</th>
            <th class="text-center">Lokasi</th>
            <th class="text-center">Detail</th>
            <th class="text-center">Hari Buka</th>
            <th class="text-center">Jam Buka</th>
            <th class="text-center">Keterangan</th>
            <th class="text-center">Hapus / Edit</th>
        </tr>
    </thead>
    
    <tbody>
<?php
$id=0;
?>
        @foreach($destinations as $data)
<?php
$id++
?>
        <tr>
        <td class="text-center p-2 m-2">{{$data->id}}</td>
        <td class="text-center p-2 m-2">{{$data->name}}</td>
        <td class="text-center p-2 m-2">{{$data->location}}</td>
        <td class="text-center p-2 m-2">{{$data->details}}</td>
        <td class="text-center p-2 m-2">{{$data->day_open}}</td>
        <td class="text-center p-2 m-2">{{$data->time_open}}</td>
        <td class="text-center p-2 m-2">{{$data->pricing}}</td>
        <td class="text-center p-2 m-2"><a class="btn btn-sm btn-danger m-1 p-1" onclick="return confirm('Lo siento {{$data->name}}.?')" href="{{ url('data-wisata/'.$data->id.'/hapus')}}">DELETO</a><a class="btn btn-sm btn-success p-1 m-1"  href="{{ url('data-wisata/'.$data->id.'/edit')}}">EL EDITO</a></td>
        </tr>
        
        @endforeach
    </tbody>
</table>


@endsection