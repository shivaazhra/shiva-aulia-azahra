<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h3>Edit Mahasiswa</h3>

    <form action="{{ route('mahasiswa.update', $mahasiswa->nim) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">NIM</label>
            <input type="text" class="form-control" value="{{ $mahasiswa->nim }}" disabled>
        </div>

        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control"
                   value="{{ old('nama', $mahasiswa->nama) }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Kelas</label>
            <input type="text" name="kelas" class="form-control"
                   value="{{ old('kelas', $mahasiswa->kelas) }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Matakuliah</label>
            <input type="text" name="matakuliah" class="form-control"
                   value="{{ old('matakuliah', $mahasiswa->matakuliah) }}">
        </div>

        <button type="submit" class="btn btn-success">
            Update
        </button>

        <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">
            Kembali
        </a>
    </form>
</div>

</body>
</html>
