<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h3 class="mb-3">Data Mahasiswa</h3>

    <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary mb-3">
        Tambah Mahasiswa
    </a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Matakuliah</th>
                <th width="150">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswas as $mahasiswa)
                <tr>
                    <td>{{ $mahasiswa->nim }}</td>
                    <td>{{ $mahasiswa->nama }}</td>
                    <td>{{ $mahasiswa->kelas }}</td>
                    <td>{{ $mahasiswa->matakuliah }}</td>
                    <td>
                        <a href="{{ route('mahasiswa.edit', $mahasiswa->nim) }}" 
                           class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="{{ route('mahasiswa.destroy', $mahasiswa->nim) }}" 
                              method="POST" 
                              class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus data?')">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach

            @if ($mahasiswas->isEmpty())
                <tr>
                    <td colspan="5" class="text-center">
                        Data mahasiswa belum tersedia.
                    </td>
                </tr>
            @endif
        </tbody>
    </table>
</div>

</body>
</html>
