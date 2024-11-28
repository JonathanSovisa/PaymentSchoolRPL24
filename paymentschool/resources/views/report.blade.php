<!-- resource/views/report.blade.php -->
@extends('layouts.inheritance')

@section('title', 'Report Tagihan')

@section('tabel')
    <h3>Report Tagihan</h3>
    <p>Universitas Kristen Duta Wacana</p>

    <!-- Filter dan Tombol Cetak -->
    <div class="mb-4 d-flex justify-content-between align-items-center">
        <div class="d-flex gap-2">
            <input type="text" class="form-control w-30" placeholder="Masukkan NIM">
            <button class="btn btn-primary"><i class="bi bi-search"></i></button>
        </div>
        <button class="btn btn-danger">Cetak Report PDF</button>
    </div>

    <table class="table-bordered">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Tahun Akademik</th>
                <th>Jurusan</th>
                <th>Total Bayar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>72220581</td>
                <td>Michael Leonardo Taner</td>
                <td>2024/2025</td>
                <td>Sistem Informasi</td>
                <td>Rp 5.000.000</td>
            </tr>
        </tbody>
    </table>
@endsection
