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
    }
}
