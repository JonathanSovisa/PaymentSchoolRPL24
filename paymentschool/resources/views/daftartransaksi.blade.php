@extends('layouts.inheritance')  <!-- Menggunakan layout inheritance.blade.php -->

@section('title', 'Daftar Transaksi Siswa')  <!-- Mengatur title halaman -->

@section('tabel')
    <h3 class="text-lef">Daftar Transaksi Mahasiswa</h3>
    <p class="text-lef">Universitas Kristen Duta Wacana Yogyakarta</p>

    <!-- Filter input fields -->
    <div class="mb-4 d-flex justify-content-left gap-2">
        <input type="text" class="form-control w-25" placeholder="Masukkan NIM">
        <button class="btn btn-primary"><i class="bi bi-search"></i></button>
    </div>

    <!-- Tabel transaksi -->
    <table class="table-bordered">
        <thead class="table-bordered">
            <tr>
                <th>NIM</th>
                <th>Tahun Akademik</th>
                <th>Jurusan</th>
                <th>Total Bayar</th>
                <th>Tenggat Pembayaran</th>
                <th>Kode VA Siswa</th>
                <th>Status Bayar</th>
                <th>Laporan</th>
            </tr>
        </thead>
        <tbody>
            <!-- Data transaksi manual -->
            <tr>
                <td>72220575</td>
                <td>2023/2024</td>
                <td>Sistem Informasi</td>
                <td>Rp3.000.000</td>
                <td>05-08-2023</td>
                <td>00172220535</td>
                <td><span class="badge bg-warning">Pending</span></td>
                <td>
                    <button class="btn btn-primary btn-sm"><i class="bi bi-pencil"></i></button>
                    <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                </td>
            </tr>
            <tr>
                <td>72220545</td>
                <td>2023/2024</td>
                <td>Sistem Informasi</td>
                <td>Rp1.500.000</td>
                <td>10-08-2023</td>
                <td>00172220545</td>
                <td><span class="badge bg-danger">Belum Bayar</span></td>
                <td>
                    <button class="btn btn-primary btn-sm"><i class="bi bi-pencil"></i></button>
                    <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                </td>
            </tr>
            <tr>
                <td>72220555</td>
                <td>2023/2024</td>
                <td>Sistem Informasi</td>
                <td>Rp10.500.000</td>
                <td>20-08-2023</td>
                <td>00172220555</td>
                <td><span class="badge bg-warning">Pending</span></td>
                <td>
                    <button class="btn btn-primary btn-sm"><i class="bi bi-pencil"></i></button>
                    <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                </td>
            </tr>
        </tbody>
    </table>

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
@endsection