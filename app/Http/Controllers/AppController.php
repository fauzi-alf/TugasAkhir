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

        session()->flash("pesan","Berhasil Ditambah");

        return redirect('data-wisata');
    }
}
