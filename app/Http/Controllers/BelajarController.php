<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

// ini adalah Controller yang dibuat untuk memisah misah Controller tiap folder agar lebbih rapi tujuannya
// class adalah rumah yang bernama...
//lalu diberi function seperti dibawah ini
class BelajarController extends Controller
{
    public function laman1(){
        return view('belajar.belajar1');
    }

    public function laman2(){
        return view('belajar.belajar2');
    }
}


