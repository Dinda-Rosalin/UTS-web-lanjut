<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\barang;
use App\Models\review;

class barangController extends Controller
{
    public function home(){
       $allBarang = barang::all();
       $data['allBarang'] = barang::all();
       
       return view('home', $data);
    }

    public function review($id_barang){

        $data = DB::table('daftar_barang')
        ->join('review_barang', 'review_barang.id_barang', '=', 'daftar_barang.id_barang')
        ->where('daftar_barang.id_barang', $id_barang)
        ->get();
    
        return view('review', ["daftarbarang" => $data]);
    }

}
