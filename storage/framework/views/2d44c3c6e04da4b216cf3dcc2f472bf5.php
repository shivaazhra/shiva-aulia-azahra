<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Mandiri - Pemrograman AI</title>
    <style>
        /* Menggunakan font modern agar tampilan lebih profesional */
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600&display=swap');

        body {
            font-family: 'Quicksand', sans-serif;
            background-color: #f0f7ff; /* Latar belakang Biru Pastel Sangat Muda */
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #ffffff;
            width: 380px;
            padding: 40px;
            border-radius: 25px;
            box-shadow: 0 15px 35px rgba(173, 216, 230, 0.4);
            text-align: center;
            border: 2px solid #d1e9ff;
        }

        .header-box {
            background-color: #e1f0ff;
            padding: 15px;
            border-radius: 15px;
            margin-bottom: 25px;
        }

        h1 {
            color: #5da7db;
            font-size: 22px;
            margin: 0;
        }

        p.welcome-text {
            color: #7895b2;
            font-size: 14px;
            margin-top: 10px;
        }

        .matkul-card {
            text-align: left;
            margin-top: 20px;
        }

        .matkul-card h3 {
            color: #5da7db;
            font-size: 16px;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            background-color: #f8fbff;
            margin-bottom: 10px;
            padding: 12px 18px;
            border-radius: 12px;
            color: #647e94;
            font-size: 14px;
            border-left: 5px solid #aed9ff;
            transition: 0.3s ease;
        }

        li:hover {
            background-color: #aed9ff;
            color: white;
            transform: scale(1.03);
        }

        .footer {
            margin-top: 25px;
            font-size: 11px;
            color: #aec3d8;
            letter-spacing: 1px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="header-box">
            <h1>Selamat Datang,</h1>
            <strong style="color: #4a90e2;"><?php echo e($nama); ?></strong>
        </div>

        <p class="welcome-text">Ini adalah halaman pertama saya di Laravel 12 dengan bantuan AI.</p>

        <div class="matkul-card">
            <h3>📚 Daftar Mata Kuliah</h3>
            <ul>
                
                <?php if(isset($mata_kuliah)): ?>
                    <?php $__currentLoopData = $mata_kuliah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($mk); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <li>Data mata kuliah belum dikirim.</li>
                <?php endif; ?>
            </ul>
        </div>

        <div class="footer">
            MODUL 1 - PEMROGRAMAN AI &copy; 2026
        </div>
    </div>

</body>
</html><?php /**PATH C:\xampp\htdocs\modul1-web-lanjut\resources\views/welcome_mahasiswa.blade.php ENDPATH**/ ?>