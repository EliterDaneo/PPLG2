@extends('belakang.layouts.main')

@section('isi')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fa-solid fa-chart-simple"></i> Daftar Tambah Jurusan
        </div>
        <div class="card-body">
            <form action="{{ route('prosesTambahDataJurusan') }}" method="POST">
                @csrf
                <div class="form-floating mb-3">
                    <input class="form-control @error('kode_jurusan') is-invalid @enderror" type="text" name="kode_jurusan"
                        placeholder="Masukan Nama Kalian" />
                    <label>Kode Jurusan</label>
                    @error('kode_jurusan')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control @error('nama_jurusan') is-invalid @enderror" type="text"
                        name="nama_jurusan" placeholder="Masukan NISN Kalian" />
                    <label>Nama Jurusan</label>
                    @error('nama_jurusan')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                    <button class="btn btn-primary" type="submit"><i class="fa-regular fa-paper-plane"></i> Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
