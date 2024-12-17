@extends('template')

@section('tulisan1', 'Edit karyawan')

@section('konten')
    <form action="/edit/{{ $karyawan1->NIP }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="merkmobil" class="form-label">Nama</label>
            <input type="text" name="Nama" id="Nama" class="form-control" value="{{ $karyawan1->Nama }}" required>
        </div>
        <div class="mb-3">
            <label for="stockmobil" class="form-label">Pangkat</label>
            <input type="text" name="Pangkat" id="Pangkat" class="form-control" value="{{ $karyawan1->Pangkat }}" required>
        </div>
        <div class="mb-3">
            <label for="stockmobil" class="form-label">Gaji</label>
            <input type="number" name="Gaji" id="Gaji" class="form-control" value="{{ $karyawan1->Gaji }}" required>
        </div>

        <button type="submit" class="btn btn-warning">Update</button>
    </form>
@endsection
