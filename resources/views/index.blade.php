@extends('template')

@section('tulisan1', 'Data Pegawai')

@section('link1')
    <a href="/pegawai/tambah" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Tambah Pegawai Baru
    </a>
@endsection

@section('konten')
    <!-- Search Section -->
    <div class="mb-4">
        <p>Cari Data Pegawai:</p>
        <form action="/pegawai/cari" method="GET" class="d-flex">
            <input type="text" name="cari" class="form-control me-2" placeholder="Cari Pegawai..." value="{{ old('cari') }}">
            <button type="submit" class="btn btn-success">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </form>
    </div>

    <!-- Table Section -->
    <table class="table table-striped table-hover">
        <thead style="background-color: #343a40; color: white;">
            <tr>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pegawai as $p)
            <tr>
                <td>{{ $p->pegawai_nama }}</td>
                <td>{{ $p->pegawai_jabatan }}</td>
                <td>{{ $p->pegawai_umur }}</td>
                <td>{{ $p->pegawai_alamat }}</td>
                <td>
                    <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-info btn-sm">
                        <i class="fa-regular fa-pen-to-square"></i>
                    </a>
                    <span class="mx-1">|</span>
                    <a href="/pegawai/delete/{{ $p->pegawai_id }}" class="btn btn-danger btn-sm"
                       onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                       <i class="fa-solid fa-trash"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination Section -->
    <div class="mt-4">
        <p>Halaman: {{ $pegawai->currentPage() }}</p>
        <p>Jumlah Data: {{ $pegawai->total() }}</p>
        <p>Data Per Halaman: {{ $pegawai->perPage() }}</p>
        {{ $pegawai->links() }}
    </div>
@endsection
