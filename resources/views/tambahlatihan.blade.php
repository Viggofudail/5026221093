@extends('template')

@section('tulisan1', 'Tambah mahasiswa')

@section('konten')
    <form action="/latets/store" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">nama</label>
            <input type="text" name="nama" id="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="NRP" class="form-label">NRP</label>
            <input type="number" name="NRP" id="NRP" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="NRP" class="form-label">ALAMAT</label>
            <input type="text" name="ALAMAT" id="AlAMAT" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
