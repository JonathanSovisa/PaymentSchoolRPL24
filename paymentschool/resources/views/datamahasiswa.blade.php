@extends('layouts.inheritance')

@section('title', 'Data Mahasiswa')

@section('tabel')


<h3>Daftar Transaksi Admin</h3>
    <p class="text-lef">Universitas Kristen Duta Wacana Yogyakarta</p>

<div class="container-fluid">
    <div class="row">
         
        <div class="mb-3 d-flex justify-content-between align-items-center">
            <!-- Bagian Kiri: Input Filter -->
            <div class="d-flex gap-2">
                <input type="text" class="form-control" placeholder="Masukkan Nama Mahasiswa" style="width: 260px;">
                <button class="btn btn-primary"><i class="bi bi-search"></i></button>
            </div>
        
            <!-- Bagian Kanan: Tombol Tambah -->
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambahData">+ Tambah Mahasiswa</button>
        </div>
        

                        <!-- Table -->
                        <table class="table-bordered">
                            <thead class="table-bordered">
                                <tr>
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th>Jurusan</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(isset($getMahasiswa) && count($getMahasiswa) > 0)
                                @foreach($getMahasiswa as $mhs)
                                <tr>
                                    <td>{{ $mhs['NIM'] }}</td>
                                    <td>{{ $mhs['nama'] }}</td>
                                    <td>{{ $mhs['Jurusan'] }}</td>
                                    <td>{{ $mhs['Tanggal Lahir'] }}</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditData" onclick="editData(1, '72220500', 'Parto', 'Sistem Informasi', '1998-08-17')">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalDeleteData" onclick="deleteData(1)">
                                            <i class="bi bi-trash3-fill"></i>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="5">Data mahasiswa tidak tersedia</td>
                                </tr>
                            @endif

                            </tbody>
                        </table>
                    </div>


    <!-- Pagination buttons -->
    <div class="d-flex justify-content-center mt-4">
        <nav>
            <ul class="pagination">
                <li class="page-item disabled"><a class="page-link" href="#">«</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">»</a></li>
            </ul>
        </nav>
    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah Data -->
<div class="modal fade" id="modalTambahData" tabindex="-1" aria-labelledby="modalTambahDataLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahDataLabel">Tambah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" class="form-control" id="nim" placeholder="Masukkan NIM">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama">
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <input type="text" class="form-control" id="jurusan" placeholder="Masukkan Jurusan">
                    </div>
                    <div class="mb-3">
                        <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggalLahir" placeholder="Masukkan Tanggal Lahir">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit Data -->
<div class="modal fade" id="modalEditData" tabindex="-1" aria-labelledby="modalEditDataLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditDataLabel">Edit Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formEdit">
                    <div class="mb-3">
                        <label for="editNim" class="form-label">NIM</label>
                        <input type="text" class="form-control" id="editNim" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="editNama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="editNama">
                    </div>
                    <div class="mb-3">
                        <label for="editJurusan" class="form-label">Jurusan</label>
                        <input type="text" class="form-control" id="editJurusan">
                    </div>
                    <div class="mb-3">
                        <label for="editTanggalLahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="editTanggalLahir">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Modal Delete Data -->
<div class="modal fade" id="modalDeleteData" tabindex="-1" aria-labelledby="modalDeleteDataLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDeleteDataLabel">Hapus Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus data mahasiswa ini?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger" id="deleteButton">Hapus</button>
            </div>
        </div>
    </div>
</div>
@endsection