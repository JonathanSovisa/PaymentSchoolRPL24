<!-- resource/views/logtransaksi.blade.php -->
@extends('layouts.inheritance')

@section('title', 'Log Transaksi')

@section('tabel')
    <h3>Log Transaksi</h3>
    <p>Universitas Kristen Duta Wacana Yogyakarta</p>

    <div class="mb-4 d-flex justify-content-left gap-2">
        <input type="text" class="form-control w-25" placeholder="Masukkan NIM">
        <button class="btn btn-primary"><i class="bi bi-search"></i></button>
    </div>

    <table class="table-bordered">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Tahun Akademik</th>
                <th>Total Bayar</th>
                <th>Periode Bayar</th>
                <th>Tgl Transaksi</th>
                <th>Kode VA</th>
                <th>Status Bayar</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>72220575</td>
                <td>2023/2024</td>
                <td>Rp 1.500.000</td>
                <td>15-06-2023</td>
                <td>2024-01-01</td>
                <td>00172220575</td>
                <td><span class="badge bg-success">Sudah Bayar</span></td>
                
            </tr>
        </tbody>
    </table>
@endsection