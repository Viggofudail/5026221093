@extends('template')

@section('tulisan1', 'Data Latihan')

@section('link1')
    <a href="/latets/tambah" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Tambah mahasiswa baru
    </a>
@endsection

@section('konten')
    <!-- Table Section -->
    <table class="table table-striped table-hover">
        <thead style="background-color: #343a40; color: white;">
            <tr>
                <th>id</th>
                <th>Nama</th>
                <th>NRP</th>
                <th>Alamat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($latihan as $m)
            <tr>
                <td>{{ $m->id }}</td>
                <td>{{ $m->nama }}</td>
                <td>{{ $m->NRP }}</td>
                <td>{{ $m->ALAMAT }}</td>
                <td>
                    <a href="/latihan/edit/{{ $m->id }}" class="btn btn-info btn-sm">
                        <i class="fa-regular fa-pen-to-square"></i>
                    </a>
                    <span class="mx-1">|</span>
                    <a href="/latihan/delete/{{ $m->id }}" class="btn btn-danger btn-sm"
                       onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                       <i class="fa-solid fa-trash"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="container">
        <div class="row">
            <div class="col-6">
                <select name="select" class="form-control select2">
                    <option value ="1"> bolo</option>
                    <option value ="2"> oden</option>
                    <option value ="3"> lunglung</option>
                </select>
            </div>
        </div>
    </div>

    <a href="/latets/tambah" class="btn btn-primary">
        Tambah mahasiswa baru
    </a>
@endsection
@endsection
