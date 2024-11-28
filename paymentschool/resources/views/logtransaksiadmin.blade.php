@extends('layouts.inheritanceadmin')

@section('title', 'Admin Instansi')

@section('tabel')

<h3>Log Transaksi Admin</h3>

<div class="mb-4 d-flex justify-content-left gap-2">
    <input type="text" class="form-control w-25" placeholder="Masukkan Nama Instansi">
    <button class="btn btn-primary"><i class="bi bi-search"></i></button>
</div>

<table border="1" cellspacing="0" cellpadding="10" style="width: 100%; border-collapse: collapse;">
    <thead style="background-color: #add8e6; color: black;">
        <tr>
            <th>Kode Instansi</th>
            <th>Nama Instansi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($dataInstansi as $instansi)
        <tr>
            <td>{{ $instansi->kode_instansi }}</td>
            <td>{{ $instansi->nama_instansi }}</td>
            <td>
                <a href="/logtransaksi" class="btn btn-primary btn-sm">
                    <i class="bi bi-eye-fill"></i> Lihat Log Transaksi
                </a>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="3" class="text-center">Tidak ada data instansi</td>
        </tr>
        @endforelse
    </tbody>
</table>

<div class="d-flex justify-content-center">
    {{ $dataInstansi->links() }} <!-- Pagination Links -->
</div>

@endsection