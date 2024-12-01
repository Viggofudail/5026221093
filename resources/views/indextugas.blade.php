@extends('template')

@section('tulisan1', 'Data Mobil')

@section('link1')
    <a href="/mobil/tambah" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Tambah Mobil Baru
    </a>
@endsection

@section('konten')
    <!-- Search Section -->
    <div class="mb-4">
        <p>Cari Data Mobil:</p>
        <form action="/mobil/cari" method="GET" class="d-flex">
            <input type="text" name="cari" class="form-control me-2" placeholder="Cari Mobil..." value="{{ old('cari') }}">
            <button type="submit" class="btn btn-success">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </form>
    </div>

    <!-- Table Section -->
    <table class="table table-striped table-hover">
        <thead style="background-color: #343a40; color: white;">
            <tr>
                <th>Kode Mobil</th>
                <th>Merk Mobil</th>
                <th>Stok Mobil</th>
                <th>Tersedia</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mobil as $m)
            <tr>
                <td>{{ $m->kodemobil }}</td>
                <td>{{ $m->merkmobil }}</td>
                <td>{{ $m->stockmobil }}</td>
                <td>

                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch"
                            {{ $m->stockmobil > 0 ? 'checked' : '' }} disabled>
                        <label class="form-check-label">
                            {{ $m->stockmobil > 0 ? 'Tersedia' : 'Tidak Tersedia' }}
                        </label>
                    </div>
                </td>
                <td>
                    <a href="/mobil/edit/{{ $m->kodemobil }}" class="btn btn-info btn-sm">
                        <i class="fa-regular fa-pen-to-square"></i>
                    </a>
                    <span class="mx-1">|</span>
                    <a href="/mobil/delete/{{ $m->kodemobil }}" class="btn btn-danger btn-sm"
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
        <p>Halaman: {{ $mobil->currentPage() }}</p>
        <p>Jumlah Data: {{ $mobil->total() }}</p>
        <p>Data Per Halaman: {{ $mobil->perPage() }}</p>
        {{ $mobil->links() }}
    </div>
@endsection
