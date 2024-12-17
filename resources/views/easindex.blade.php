@extends('template')

@section('tulisan1')
<h1>tabel karyawan</h1>
@endsection

@section('konten')
<table class="table table-striped table-hover">
    <thead style="background-color: #343a40; color: white;">
        <tr>
            <th>NIP</th>
            <th>Nama</th>
            <th>Pangkat</th>
            <th>Gaji</th>

            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($karyawan1 as $m)
        <tr>
            <td>{{ $m->NIP }}</td>
            <td>{{ $m->Nama }}</td>
            <td>{{ $m->Pangkat }}</td>
            <td>Rp. {{ number_format($m->Gaji, 0, ',', '.') }}</td>
            <td>
                <a href="/edit/{{ $m->NIP }}" class="btn btn-info btn-sm">
                    <i class="fa-regular fa-pen-to-square"></i>
                </a>
                <span class="mx-1">|</span>
                <a href="/view/{{ $m->NIP }}" class="btn btn-success btn-sm">

                   <i class="fa-solid fa-eye"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
