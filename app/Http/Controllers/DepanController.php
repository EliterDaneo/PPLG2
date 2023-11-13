<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepanController extends Controller
{
    public function index(){
        return view('home');
    }

    public function siswa(){
        return view('depan.siswa.index');
    }

    public function guru(){
        return view('depan.guru.index');
    }

    public function mapel(){
        return view('depan.mapel.index');
    }
}
