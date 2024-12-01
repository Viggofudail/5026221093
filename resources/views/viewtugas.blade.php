@extends('template')

@section('tulisan1', 'Edit Mobil')

@section('konten')
    <form action="/mobil/update/{{ $mobil->kodemobil }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="merkmobil" class="form-label">Merk Mobil</label>
            <input type="text" name="merkmobil" id="merkmobil" class="form-control" value="{{ $mobil->merkmobil }}" required>
        </div>
        <div class="mb-3">
            <label for="stockmobil" class="form-label">Stok Mobil</label>
            <input type="number" name="stockmobil" id="stockmobil" class="form-control" value="{{ $mobil->stockmobil }}" required>
        </div>
        <div class="mb-3">
            <label for="tersedia" class="form-label">Tersedia</label>
            <div class="form-check form-switch">

                <input class="form-check-input" type="checkbox" role="switch" name="tersedia"
                       {{ $mobil->stockmobil > 0 ? 'checked' : '' }} disabled>
                <label class="form-check-label" for="tersedia">
                    {{ $mobil->stockmobil > 0 ? 'Tersedia' : 'Tidak Tersedia' }}
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-warning">Update</button>
    </form>
@endsection
