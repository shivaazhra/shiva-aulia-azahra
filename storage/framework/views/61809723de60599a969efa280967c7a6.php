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

    <form action="<?php echo e(route('mahasiswa.update', $mahasiswa->nim)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="mb-3">
            <label class="form-label">NIM</label>
            <input type="text" class="form-control" value="<?php echo e($mahasiswa->nim); ?>" disabled>
        </div>

        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control"
                   value="<?php echo e(old('nama', $mahasiswa->nama)); ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Kelas</label>
            <input type="text" name="kelas" class="form-control"
                   value="<?php echo e(old('kelas', $mahasiswa->kelas)); ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Matakuliah</label>
            <input type="text" name="matakuliah" class="form-control"
                   value="<?php echo e(old('matakuliah', $mahasiswa->matakuliah)); ?>">
        </div>

        <button type="submit" class="btn btn-success">
            Update
        </button>

        <a href="<?php echo e(route('mahasiswa.index')); ?>" class="btn btn-secondary">
            Kembali
        </a>
    </form>
</div>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\modul2-web-lanjut\resources\views/mahasiswa/edit.blade.php ENDPATH**/ ?>