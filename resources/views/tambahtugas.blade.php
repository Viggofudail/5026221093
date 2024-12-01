@extends('template')

@section('tulisan1', 'Tambah Mobil Baru')

@section('konten')
    <form action="/mobil/store" method="POST">
        @csrf
        <div class="mb-3">
            <label for="merkmobil" class="form-label">Merk Mobil</label>
            <input type="text" name="merkmobil" id="merkmobil" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="stockmobil" class="form-label">Stok Mobil</label>
            <input type="number" name="stockmobil" id="stockmobil" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="tersedia" class="form-label">Tersedia</label>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" name="tersedia" id="tersedia" checked>
                <label class="form-check-label" for="tersedia">Tersedia</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
