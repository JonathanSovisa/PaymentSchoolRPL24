@extends('layouts.inheritanceadmin')

@section('title', 'Admin Instansi')

@section('tabel')

<h3>Admin Instansi</h3>

<!-- Header dengan Filter dan Tombol Sejajar -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <div class="d-flex gap-2">
        <input type="text" class="form-control w-50" placeholder="Masukkan Nama Admin Instansi">
        <button class="btn btn-primary"><i class="bi bi-search"></i> Filter</button>
    </div>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambahData">+ Admin Instansi</button>
</div>

<!-- Tabel Admin Instansi -->
<table class="table-bordered">
    <thead class="table-bordered">
        <tr>
            <th>ID Admin</th>
            <th>Nama Admin Instansi</th>
            <th>Email</th>
            <th>Kode Instansi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @if(isset($getAdmin) && count($getAdmin) > 0)
        @foreach($getAdmin as $admin)
        <tr>
            <td>{{ $admin['IdAdmin'] }}</td>
            <td>{{ $admin['Nama'] }}</td>
            <td>{{ $admin['Email'] }}</td>
            <td>{{ $admin['Instansi']['IdInstansi'] }}</td>
            <td>
                <button class="btn btn-primary btn-sm"><i class="bi bi-pencil"></i></button>
                <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
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

<!-- Modal Tambah Data -->
<div class="modal fade" id="modalTambahData" tabindex="-1" aria-labelledby="modalTambahDataLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahDataLabel">Tambah Admin Instansi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/admininstansi/create" method="POST">
                    @csrf <!-- Tambahkan token CSRF untuk keamanan -->
                    <div class="mb-3">
                        <label for="namaAdmin" class="form-label">Nama Admin Instansi</label>
                        <input type="text" class="form-control" id="namaAdmin" name="namaAdmin" placeholder="Masukkan Nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="emailAdmin" class="form-label">Email</label>
                        <input type="email" class="form-control" id="emailAdmin" name="emailAdmin" placeholder="Masukkan Email" required>
                    </div>
                    <div class="mb-3">
                        <label for="teleponAdmin" class="form-label">Nomor Telepon</label>
                        <input type="text" class="form-control" id="teleponAdmin" name="teleponAdmin" placeholder="Masukkan Nomor Telepon" required>
                    </div>
                    <div class="mb-3">
                        <label for="kodeInstansi" class="form-label">Kode Instansi</label>
                        <input type="text" class="form-control" id="kodeInstansi" name="kodeInstansi" placeholder="Masukkan Kode Instansi" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection