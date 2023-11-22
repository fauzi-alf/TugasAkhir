@extends("template")

@section("tittle")
data_pegawai
@endsection

@section("content")
<a href="{{url('form-tambah')}}" class="btn btn-sm btn-primary">TAMBAH</a>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th class="text-center">ID</th>
            <th class="text-center">Nama</th>
            <th class="text-center">Lokasi</th>
            <th class="text-center">detail</th>
            <th class="text-center">Hari Kerja</th>
            <th class="text-center">Jam kerja</th>
            <th class="text-center">Harga</th>
            <th class="text-center">Deleto, Lo Siento</th>
        </tr>
    </thead>
    
    <tbody>
        <?php
        $no = 0;
        ?>
        @foreach($destinations as $data)
        <!-- <?php $no++; ?> -->
        <tr>
        <td class="text-center">{{$id}}</td>
        <td class="text-center">{{ $data->nama}}</td>
        <td class="text-center">{{$data->location}}</td>
        <td class="text-center">{{$data->details}}</td>
        <td class="text-center">{{$data->day_open}}</td>
        <td class="text-center">{{$data->time_open}}</td>
        <td class="text-center"><a class="btn btn-sm btn-danger" onclick="return confirm('Lo siento {{$data->nama}}.?')" href="{{ url('data-wisata/'.$data->id.'/hapus')}}">DELETO</a></td>
        <td class="text-center"><a class="btn btn-sm btn-success"  href="{{ url('data-wisata/'.$data->id.'/edit')}}">LO SIENTO</a></td>
        </tr>
        
        @endforeach
    </tbody>
</table>

@endsection