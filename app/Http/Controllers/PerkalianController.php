<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerkalianController extends Controller
{
    public function index(request $request){
        $angka_1=0;
        $angka_2=0;
        $hasil=0;
        return view('perkalian', compact('hasil'));
    }
    public function hitung(request $request){
        $angka_1 = $request->input('angka1');
        $angka_2 = $request->input('angka2');
        $hasil = $angka_1 * $angka_2;     
        return view('perkalian', compact('hasil'));
        }
}