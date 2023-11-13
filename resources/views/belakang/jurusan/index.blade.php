@extends('belakang.layouts.main')

@section('isi')
    <div class="card mb-4">
        <div class="card-header">
            <a href="#modalTambah" data-bs-toggle="modal" class="btn btn-outline-success"><i class="fas fa-plus me-1"></i>
                Tambah
                Data</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Jurusan</th>
                        <th>nama jurusan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp

                    @forelse ($jurusan as $j)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $j->kode_jurusan }}</td>
                            <td>{{ $j->nama_jurusan }}</td>
                            <td>
                                <a href="#modalEdit" title="Edit" class="btn btn-secondary btn-sm"><i
                                        class="fa-solid fa-pencil"></i></a>
                                <a href="#modalLihat{{ $j->id }}" data-bs-toggle="modal" title="Lihat"
                                    class="btn btn-primary btn-sm"><i class="fa-solid fa-eye"></i></a>
                                <a href="" title="Hapus" class="btn btn-danger btn-sm"><i
                                        class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    @empty
                        <div class="alert alert-danger" role="alert">
                            Data Belum Tersedia
                        </div>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('modalTambah')
    <div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('prosesTambahDataJurusan') }}" method="POST">
                        @csrf
                        <div class="form-floating mb-3">
                            <input class="form-control @error('kode_jurusan') is-invalid @enderror" type="text"
                                name="kode_jurusan" placeholder="Masukan Nama Kalian" />
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
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endpush

@push('modalLihat')
    @foreach ($jurusan as $j)
        <div class="modal fade" id="modalLihat{{ $j->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal Lihat</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Data dengan kode <b>{{ $j->kode_jurusan }}</b> adalah jurusan <b>{{ $j->nama_jurusan }}</b></p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endpush


{{-- //edit belum selesai --}}
@push('modalEdit')
    <div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('prosesTambahDataJurusan') }}" method="POST">
                        @csrf
                        <div class="form-floating mb-3">
                            <input class="form-control @error('kode_jurusan') is-invalid @enderror" type="text"
                                name="kode_jurusan" placeholder="Masukan Nama Kalian" />
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
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endpush
