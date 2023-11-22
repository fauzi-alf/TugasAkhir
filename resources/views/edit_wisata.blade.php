@extends('template')
@section("tittle")
EDITH DATA
@endsection
@section('content')

<div class="card shadow bg-tranparents px-5 py-5">
<table class="table table-bordered table-striped">
<form action="{{ url('edit-pegawai') }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$pegawai->id}}">
    <div class="form-group mb-2">
        <label for="nip">NIP</label>
        <input type="text" name="nip" class="form-control bg-danger" id="nip" value="{{$pegawai->nip}}"readonly required>
    </div>
    <div class="form-group mb-2">
        <label for="nama">Nama</label>
        <input type="text" name="nama" class="form-control bg-warning" value="{{$pegawai->nama}}" id="nama"required>
    </div>
    <div class="form-check mb-2">
    <label for="jk">Jenis Kelamin</label><br>
    <div class="form-check form-check-inline">
        
        <label class="form-check-label " for="laki">
            <input class="form-check-input bg-danger" type="radio" name="jk" value="L" id="laki" <?=($pegawai->jk == "L")? "checked" :""?>>Laki-laki</label>
    </div>
    <div class="form-check form-check-inline">
        
        <label class="form-check-label " for="perempuan"><input class="form-check-input bg-danger" type="radio" name="jk" value="P" id="perempuan" <?=($pegawai->jk == "P")? "checked" :""?>>Perempuan</label>
    </div>
</div>

    <div class="form-group mb-2">
        <label for="tempat_lahir">Tempat Lahir</label>
        <input type="text" name="tempat_lahir" class="form-control bg-success"value="{{$pegawai->tempat_lahir}}" id="tempat_lahir">
    </div>
    <div class="form-group mb-2">
        <label for="tgl_lahir">Tanggal Lahir</label>
        <input type="date" name="tgl_lahir" class="form-control bg-primary"value="{{$pegawai->tgl_lahir}}" id="tgl_lahir">
    </div>
    <div class="form-group mb-2">
        <label for="hp">Handphone</label>
        <input type="text" name="hp" value="{{$pegawai->hp}}"class="form-control bg-info" id="hp">
    </div>
    <div class="form-group mb-2">
        <label for="alamat">Alamat</label>
        <textarea name="alamat" class="form-control bg-secondary" id="alamat">{{$pegawai->alamat}}</textarea>
    </div>
    <button type="submit" class="btn mt-3 btn-sm btn-success">Simpan</button><br>
    <a href="{{ url('data-pegawai') }}" class="btn mt-3 btn-sm btn-danger">Kembali</a>
</form>
</table>
</div>

@endsection