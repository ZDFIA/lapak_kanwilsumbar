<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>LAPAK KANWIL SUMBAR - Cara Mendaftar di M-Paspor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="images/logo.ico">
    <style>
        /* ================= DETAIL CARD ================= */
        .detail-card {
            width: 100%;
            max-width: 1000px;
            margin: 40px auto;
            padding: 40px 20px;
            background: #0B3C5D;
            color: #fff;
            border-radius: 18px;
            box-sizing: border-box;
        }

        .detail-card h2 {
            font-size: 28px;
            margin-bottom: 25px;
            font-weight: bold;
            text-align: center;
        }

        .detail-card img {
            width: 100%;
            border-radius: 18px;
            margin-bottom: 30px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.3);
        }

        /* ================= VIDEO ================= */
        .video-wrapper {
            margin-bottom: 35px;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0,0,0,0.35);
        }

        .video-wrapper video {
            width: 100%;
            display: block;
            background: #000;
        }

        .detail-content h3 {
            font-size: 20px;
            margin-bottom: 12px;
            font-weight: bold;
        }

        .detail-content ol {
            padding-left: 20px;
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .detail-content ol li {
            margin-bottom: 8px;
        }

        .detail-content p {
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .lihat-lainnya {
            text-align: center;
            margin-top: 40px;
        }

        .lihat-lainnya a {
            display: inline-block;
            background: #D9ECF2;
            color: #0B3C5D;
            padding: 14px 38px;
            border-radius: 999px;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            transition: all .25s ease;
        }

        .lihat-lainnya a:hover {
            background: #0B3C5D;
            color: #fff;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(11,60,93,.35);
        }
    </style>
</head>
<body>

<!-- ================= HEADER ================= -->
<?php
    include "navbar.php";
?>

<!-- ================= DETAIL ================= -->
<section class="detail-card">
    <h2>Tata Cara Pendaftaran Paspor</h2>

    <img src="images/slide2.jpeg" alt="Cara Mendaftar di M-Paspor">

    <!-- VIDEO (mengambil dari index_files) -->
    <div class="video-wrapper">
        <video controls>
            <source src="videos/tutorial-paspor.mp4" type="video/mp4">
            Browser Anda tidak mendukung pemutaran video.
        </video>
    </div>

    <div class="detail-content">
        <h3>Langkah-langkah Pendaftaran Paspor:</h3>
        <ol>
            <li>Unduh aplikasi <strong>M-Paspor</strong> melalui Play Store atau App Store.</li>
            <li>Buat akun menggunakan email yang aktif.</li>
            <li>Pilih jenis permohonan paspor.</li>
            <li>Lengkapi data diri dan unggah dokumen persyaratan.</li>
            <li>Pilih kantor imigrasi serta jadwal kedatangan.</li>
            <li>Lakukan pembayaran dan datang sesuai jadwal.</li>
        </ol>

        <p>
            Pastikan data yang dimasukkan sudah benar dan dokumen yang diunggah
            jelas agar proses pendaftaran berjalan lancar.
        </p>
    </div>

    <div class="lihat-lainnya">
        <a href="/">Kembali ke Home</a>
    </div>
</section>

<!-- ================= FOOTER ================= -->
<?php
    include "footer.php";
?>

</body>
</html>
