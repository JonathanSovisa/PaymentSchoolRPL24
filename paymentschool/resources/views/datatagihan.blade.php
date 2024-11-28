@extends('layouts.inheritance')

@section('title', 'Data Tagihan')

@section('tabel')

<h3>Data Tagihan</h3>

<div class="mb-4 d-flex justify-content-between align-items-center">
    <!-- Bagian Kiri: Input Filter -->
    <div class="d-flex gap-2">
        <input type="text" class="form-control" style="width: 70%;" placeholder="Masukkan Data Tagihan">
        <button class="btn btn-primary"><i class="bi bi-search"></i></button>
    </div>
    <!-- Bagian Kanan: Tombol Tambah -->
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambahData">+ Tambah Tagihan</button>
</div>


<!-- Tabel Data Tagihan -->
<table border="1" cellspacing="0" cellpadding="10">
    <thead>
        <tr>
            <th>Jenis Biaya</th>
            <th>Harga</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <!-- Contoh Data Manual -->
        <tr>
            <td>Biaya Tetap</td>
            <td>Rp 2.600.000</td>
            <td>
                <button class="btn btn-primary btn-sm"><i class="bi bi-pencil"></i></button>
                <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
            </td>
        </tr>
        <tr>
            <td>SKS</td>
            <td>Rp 250.000</td>
            <td>
                <button class="btn btn-primary btn-sm"><i class="bi bi-pencil"></i></button>
                <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
            </td>
        </tr>
        <tr>
            <td>Biaya Kesehatan</td>
            <td>Rp 165.000</td>
            <td>
                <button class="btn btn-primary btn-sm"><i class="bi bi-pencil"></i></button>
                <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
            </td>
        </tr>
        <tr>
            <td>ICE</td>
            <td>Rp 600.000</td>
            <td>
                <button class="btn btn-primary btn-sm"><i class="bi bi-pencil"></i></button>
                <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
            </td>
        </tr>
    </tbody>
</table>

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
                        <label for="nim" class="form-label">Jenis Biaya</label>
                        <input type="text" class="form-control" id="nim" placeholder="Masukkan Jenis Biaya">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Harga</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan Harga">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection