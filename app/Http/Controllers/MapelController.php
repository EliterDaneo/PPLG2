<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mapel;

class MapelController extends Controller
{
    public function index(){
        $judul = "Halaman Data Mapel";
        $mapel = Mapel::all();
        return view('belakang.mapel.index', compact('judul', 'mapel'));
    }

    public function create(){
        $judul = "Halaman Data Mapel";
        return view('belakang.mapel.create', compact('judul'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'kode_mapel' => 'required',
            'nama_mapel' => 'required',
            'guru_pengampu' => 'required'
        ]);

        Kelas::create([
            'kode_mapel' => $request->kode_mapel,
            'nama_mapel' => $request->nama_mapel,
            'guru_pengampu' => $request->guru_pengampu
        ]);

        return redirect()->route('dataMapel')->with(['success', 'Data Berhasil Disimpan!']);
    }
}
