<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destinations;

class AppController extends Controller
{
    public function home(){
        return view("home");
    }
    public function data_wisata(){
        $destinations = Destinations::get();

        $data = ([
            "destinations" => $destinations,
        ]);
        return view("data_wisata", $data);
    }
    public function hapus_wisata($id){
        Destinations::where("id",$id)->delete();
        return redirect("data-wisata");
    }
    public function tambah_wisata(){
        return view("tambah_wisata");
    }
    public function proses_tambah_wisata(Request $request){
        $nama = $request->nama;
        $location = $request->location;
        $details = $request->details;
        $day_open = $request->day_open;
        $time_open = $request->time_open;
        $pricing = $request->pricing;

        Destinations::create([
            "nama" => $nama,
            "location" => $location,
            "details" => $details,
            "day_open" => $day_open,
            "time_open" => $time_open,
            "pricing" => $pricing
        ]);

        session()->flash("pesan","Data Berhasil Ditambah");

        return redirect('data-wisata');
    }
    public function edit_pegawai($id){
        $pegawai = Pegawai::where("id",$id)->first();

        if(!$pegawai){
            abort(404);
       }

       $data = ([
            "pegawai" => $pegawai
       ]);
        
        return view("edit_pegawai",$data);
    }
    public function proses_edit_pegawai(Request $request){
        $id = $request->id;
        $nip = $request->nip;
        $nama = $request->nama;
        $jk = $request->jk;
        $tempat_lahir = $request->tempat_lahir;
        $tgl_lahir = $request->tgl_lahir;
        $hp = $request->hp;
        $alamat = $request->alamat;

        Pegawai::where("id",$id)->update([
            "nip" => $nip,
            "nama" => $nama,
            "jk" => $jk,
            "tempat_lahir" => $tempat_lahir,
            "tgl_lahir" => $tgl_lahir,
            "hp" => $hp,
            "alamat" => $alamat
        ]);

        session()->flash("pesan","Data Berhasil Diedit");

        return redirect("data-pegawai/".$id."/edit");
    }
}
