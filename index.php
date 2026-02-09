<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>LAPAK KANWIL SUMBAR - Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="images/logo.ico">
    
</head>
<body>

<!-- ================= HEADER ================= -->
<?php
    include "navbar.php";
?>

<!-- ================= HERO ================= -->
<?php
    include "hero.php";
?>

<!-- ================= RINGKASAN LAYANAN ================= -->
<section class="portal-summary" id="home-galeri">

    <div class="portal">
        <a href="detail1.php" class="portal-card">
            <img src="images/slide3.jpeg" alt="Tata Cara Pendaftaran Paspor">
            <span>Tata Cara Pendaftaran Paspor</span>
        </a>
        <a href="detail2.php" class="portal-card">
            <img src="images/slide2.jpeg" alt="Cara Mendaftar di M-Paspor">
            <span>Cara Mendaftar di M-Paspor</span>
        </a>
        <a href="https://imigrasi.go.id/custom/view?type=wna-category" class="portal-card">
            <img src="images/slide16.jpeg" alt="Paspor Hilang">
            <span>Layanan WNA</span>
        </a>
        <a href="detail3.php" class="portal-card">
            <img src="images/slide4.jpeg" alt="Alur Penerbitan Paspor">
            <span>Alur Penerbitan Paspor</span>
        </a>
        <a href="detail4.php" class="portal-card" id="kahar">
            <img src="images/slide5.jpeg" alt="Pergantian Paspor Karena Keadaan Kahar">
            <span>Pergantian Paspor Karena Keadaan Kahar</span>
        </a>
        <a href="detail5.php" class="portal-card">
            <img src="images/slide6.jpeg" alt="Permohonan Paspor Anak">
            <span>Permohonan Paspor Anak</span>
        </a>
        <a href="detail6.php" class="portal-card">
            <img src="images/slide7.jpeg" alt="Pergantian Paspor">
            <span>Pergantian Paspor</span>
        </a>
        <a href="detail7.php" class="portal-card">
            <img src="images/slide8.jpeg" alt="Paspor Rusak">
            <span>Paspor Rusak</span>
        </a>
    </div> <!-- ⬅️ PENTING: TUTUP .portal -->

    <div class="lihat-lainnya">
        <a href="layanan.php">Lihat Lebih Banyak</a>
    </div>

</section>

<!-- ================= FOOTER ================= -->
<?php
    include "footer.php";
?>
<script src="hamburger.js"></script>

</body>
</html>
