<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <!-- Header Section -->
        <div class="text-start mb-4">
            <h5 class="text-dark">Muhammad Viggo Fudail - 5026221093</h5>
            <h3 class="text-dark">Edit Data Pegawai</h3>
        </div>

        <!-- Back Button -->
        <a href="/pegawai" class="btn btn-secondary mb-3">Kembali</a>

        <!-- Form Section -->
        <form action="/pegawai/update/{{ $pegawai->pegawai_id }}" method="post" class="row g-3" style="max-width: 600px;">
            {{ csrf_field() }}
            <div class="col-md-6">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" value="{{ $pegawai->pegawai_nama }}" required>
            </div>
            <div class="col-md-6">
                <label for="jabatan" class="form-label">Jabatan</label>
                <input type="text" name="jabatan" id="jabatan" class="form-control" value="{{ $pegawai->pegawai_jabatan }}" required>
            </div>
            <div class="col-md-6">
                <label for="umur" class="form-label">Umur</label>
                <input type="number" name="umur" id="umur" class="form-control" value="{{ $pegawai->pegawai_umur }}" required>
            </div>
            <div class="col-md-12">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control" rows="3" required>{{ $pegawai->pegawai_alamat }}</textarea>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</
