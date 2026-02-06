<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>LAPAK KANWIL SUMBAR - Alur Penerbitan Paspor</title>
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
    <h2>Alur Penerbitan Paspor</h2>

    <!-- FOTO UTAMA -->
    <img src="images/slide4.jpeg" alt="Alur Penerbitan Paspor">

    <!-- FOTO ALUR -->
    <img src="images/alur.png" alt="Diagram Alur Penerbitan Paspor">

    <div class="detail-content">
        <h3>Penjelasan Singkat:</h3>
        <p>
            Diagram di atas menjelaskan alur pembuatan paspor secara sederhana.
            Proses dimulai dari pendaftaran melalui aplikasi M-Paspor, kemudian pemohon datang ke Kantor Imigrasi sesuai jadwal untuk pemeriksaan data dan wawancara.
            Setelah seluruh tahapan selesai dan disetujui, paspor akan diproses hingga akhirnya paspor diterbitkan dan siap digunakan.
        </p>
    </div>

    <div class="lihat-lainnya" style="margin-top:40px;">
        <a href="layanan.php">Kembali ke Layanan</a>
    </div>
</section>

<!-- ================= FOOTER ================= -->
<?php
    include "footer.php";
?>

</body>
</html>
