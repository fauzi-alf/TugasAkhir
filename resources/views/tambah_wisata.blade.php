@extends('template')
@section("tittle")
TAMBAH DATAH
@endsection
@section('content')
<style>
    body{
        color: blue !important;
    }
</style>
<div class="card shadow bg-tranparents px-5 py-5">
<table class="table table-bordered table-striped">
<form action="{{ route('pegawai.tambah') }}" method="POST">
    @csrf
    
    <div class="form-group mb-2">
        <label for="nama">Nama</label>
        <input type="text" name="nama" class="form-control bg-warning" id="nama"required>
    </div>
   

    <div class="form-group mb-2">
        <label for="location">Lokasi</label>
        <input type="text" name="location" class="form-control bg-success" id="location">
    </div>
    <div class="form-group mb-2">
        <label for="details">Detail </label>
        <input type="date" name="details" class="form-control bg-primary" id="details">
    </div>
    <div class="form-group mb-2">
        <label for="day_open">Hari Buka</label>
        <input type="text" name="day_open" class="form-control bg-info" id="day_open">
    </div>
    <div class="form-group mb-2">
        <label for="time_open">Jam Buka</label>
        <input type="text" name="time_open" class="form-control bg-info" id="time_open">
    </div>
    <div class="form-group mb-2">
        <label for="time_open">Harga</label>
        <input type="text" name="pricing" class="form-control bg-info" id="pricing">
    </div>
    
    <button type="submit" class="btn mt-3 btn-sm btn-primary">Simpan</button><br>
    <a href="{{ url('data-pegawai') }}" class="btn mt-3 btn-sm btn-primary">Kembali</a>
</form>
</table>
</div>

@endsection