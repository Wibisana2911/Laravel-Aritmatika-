<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembagianController extends Controller
{
    public function index(request $request){
        $angka_1=0;
        $angka_2=0;
        $hasil=0;
        return view('pembagian', compact('hasil'));
    }
    public function hitung(request $request){
        $angka_1 = $request->input('angka1');
        $angka_2 = $request->input('angka2');
        $hasil = $angka_1 / $angka_2;     
        return view('pembagian', compact('hasil'));
        }
}