@extends('template')

@section('tulisan1', 'View Karyawan')

@section('link1')
<a href='/index' class="text-primary">Kembali</a>
@endsection

@section('konten')
<div class="container mt-3">
    <h4>View Karyawan</h4>
    <table class="table table-borderless" style="width: 100%; max-width: 400px;">
        <tr>
            <th style="width: 150px;">NIP</th>
            <td>{{ $karyawan1->NIP }}</td>
        </tr>
        <tr>
            <th>Nama</th>
            <td>{{ $karyawan1->Nama }}</td>
        </tr>
        <tr>
            <th>Pangkat</th>
            <td>{{ $karyawan1->Pangkat }}</td>
        </tr>
        <tr>
            <th>Gaji</th>
            <td>Rp. {{ number_format($karyawan1->Gaji, 0, ',', '.') }}</td>
        </tr>
    </table>
</div>
@endsection
