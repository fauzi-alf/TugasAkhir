@extends("template")

@section("tittle")
data_pegawai
@endsection

@section("content")
<a href="{{url('form-tambah')}}" class="btn btn-sm btn-primary">TAMBAH</a>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">NIP</th>
            <th class="text-center">Nama</th>
            <th class="text-center">L/P</th>
            <th class="text-center">Tempat, Tanggal Lahir</th>
            <th class="text-center">HP</th>
            <th class="text-center">Alamat</th>
            <th class="text-center">Deleto</th>
        </tr>
    </thead>
    
    <tbody>
        <?php
        $no = 0;
        ?>
        @foreach($pegawai as $data)
        <?php $no++; ?>
        <tr>
        <td class="text-center">{{$no}}</td>
        <td class="text-center">{{ $data->nip}}</td>
        <td>{{$data->nama}}</td>
        <td class="text-center">{{$data->jk}}</td>
        <td class="text-center">{{ $data->tempat_lahir}}, {{ date("d-m-Y",strtotime($data->tgl_lahir))}}</td>
        <td>{{$data->hp}}</td>
        <td class="text-center">{{$data->alamat}}</td>
        <td class="text-center"><a class="btn btn-sm btn-danger" onclick="return confirm('Lo siento {{$data->nama}}.?')" href="{{ url('data-pegawai/'.$data->id.'/hapus')}}">DELETO</a></td>
        <td class="text-center"><a class="btn btn-sm btn-success"  href="{{ url('data-pegawai/'.$data->id.'/edit')}}">LO SIENTO</a></td>
        </tr>
        
        @endforeach
    </tbody>
</table>

@endsection