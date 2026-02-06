<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>LAPAK KANWIL SUMBAR - Tata Cara Berpakaian</title>
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
            color: #f6f6f8;
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
            padding-left: 0; /* sejajar dengan judul */
        }

        .detail-content ol {
            padding-left: 20px; /* agar angka sejajar dengan subjudul */
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .detail-content ol li {
            margin-bottom: 8px;
        }

        .detail-content ol li strong {
            font-weight: bold;
        }

        .detail-content p {
            line-height: 1.6;
            margin-bottom: 20px;
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

<?php
    include "navbar.php";
?>

<section class="detail-card">
    <h2>Tata Cara Berpakaian</h2>
    <img src="images/slide12.jpeg" alt="Tata Cara Berpakaian">

     <!-- FOTO ALUR -->
    <img src="images/pakaian.png" alt="Gambar Tata Cara Berpakaian">
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
