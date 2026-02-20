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

    <a href="<?php echo e(route('mahasiswa.create')); ?>" class="btn btn-primary mb-3">
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
            <?php $__currentLoopData = $mahasiswas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mahasiswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($mahasiswa->nim); ?></td>
                    <td><?php echo e($mahasiswa->nama); ?></td>
                    <td><?php echo e($mahasiswa->kelas); ?></td>
                    <td><?php echo e($mahasiswa->matakuliah); ?></td>
                    <td>
                        <a href="<?php echo e(route('mahasiswa.edit', $mahasiswa->nim)); ?>" 
                           class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="<?php echo e(route('mahasiswa.destroy', $mahasiswa->nim)); ?>" 
                              method="POST" 
                              class="d-inline">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" 
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus data?')">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php if($mahasiswas->isEmpty()): ?>
                <tr>
                    <td colspan="5" class="text-center">
                        Data mahasiswa belum tersedia.
                    </td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\modul2-web-lanjut\resources\views/mahasiswa/index.blade.php ENDPATH**/ ?>