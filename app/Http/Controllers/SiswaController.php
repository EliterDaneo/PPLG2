<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(){
        $judul = "Halaman Data Siswa";
        return view('belakang.siswa.index', compact('judul'));
    }

    public function create(){
        $judul = "Halaman Data Siswa";
        return view('belakang.siswa.create', compact('judul'));
    }
}
