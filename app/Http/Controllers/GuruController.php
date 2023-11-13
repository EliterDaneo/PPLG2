<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index(){
        $judul = "Halaman Data Guru";
        return view('belakang.guru.index', compact('judul'));
    }

    public function create(){
        $judul = "Halaman Data Guru";
        return view('belakang.guru.create', compact('judul'));
    }
}
