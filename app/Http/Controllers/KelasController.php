<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    public function index(){
        $judul = "Halaman Data Kelas";
        $kelas = Kelas::all();
        return view('belakang.kelas.index', compact('judul', 'kelas'));
    }

    public function create(){
        $judul = "Halaman Data Kelas";
        return view('belakang.kelas.create', compact('judul'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'kode_kelas' => 'required',
            'jenjang_kelas' => 'required'
        ]);

        Kelas::create([
            'kode_kelas' => $request->kode_kelas,
            'jenjang_kelas' => $request->jenjang_kelas
        ]);

        return redirect()->route('dataKelas')->with(['success', 'Data Berhasil Disimpan!']);
    }
}
