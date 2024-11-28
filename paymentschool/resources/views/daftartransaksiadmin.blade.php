@extends('layouts.inheritanceadmin')

@section('title', 'Admin Instansi')

@section('tabel')

<h3>Daftar Transaksi Admin</h3>

<div class="mb-4 d-flex justify-content-left gap-2">
    <input type="text" class="form-control w-25" placeholder="Masukkan Nama Instansi">
    <button class="btn btn-primary"><i class="bi bi-search"></i></button>
</div>

<table class="table-bordered" cellspacing="0" cellpadding="10" style="width: 100%; border-collapse: collapse;">
    <thead>
        <tr>
            <th>Kode Instansi</th>
            <th>Nama Instansi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($dataInstansi as $instansi)
        <tr>
            <td>{{ $instansi->kode_instansi }}</td>
            <td>{{ $instansi->nama_instansi }}</td>
            <td>
                <a href="/daftartransaksi" class="btn btn-primary btn-sm">
                    <i class="bi bi-eye-fill"></i> Lihat Daftar Transaksi
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="d-flex justify-content-center">
    {{ $dataInstansi->links() }} <!-- Pagination Links -->
</div>

@endsection