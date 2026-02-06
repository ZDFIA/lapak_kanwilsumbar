<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>LAPAK KANWIL SUMBAR - Tata Cara Pendaftaran Paspor</title>
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
    <h2>Tata Cara Pendaftaran Paspor</h2>
    <img src="images/slide3.jpeg" alt="Tata Cara Pendaftaran Paspor">

    <div class="detail-content">
        <h3>1. Persiapan dan Pendaftaran Online</h3>
        <ol>
            <li><strong>Unduh Aplikasi M-Paspor:</strong> Dapatkan aplikasi M-Paspor di App Store atau Play Store.</li>
            <li><strong>Daftar Akun:</strong> Buat akun di aplikasi dan lengkapi data diri sesuai petunjuk.</li>
            <li><strong>Isi Formulir:</strong> Masuk ke akun, pilih jenis pengajuan paspor, isi data diri permohonan, dan unggah dokumen persyaratan.</li>
            <li><strong>Pilih Jadwal:</strong> Tentukan lokasi kantor imigrasi terdekat dan pilih tanggal kedatangan yang diinginkan.</li>
            <li><strong>Pembayaran:</strong> Selesaikan pembayaran biaya permohonan paspor dan simpan bukti pembayaran sebagai referensi.</li>
        </ol>

        <h3>2. Proses di Kantor Imigrasi</h3>
        <ol>
            <li><strong>Datang Sesuai Jadwal:</strong> Kunjungi Kantor Imigrasi sesuai jadwal dengan membawa dokumen asli dan fotokopi.</li>
            <li><strong>Ambil Data Biometrik:</strong> Anda akan menjalani proses foto dan pengambilan sidik jari.</li>
            <li><strong>Wawancara:</strong> Petugas Imigrasi akan melakukan wawancara singkat.</li>
        </ol>

        <h3>3. Pengambilan Paspor</h3>
        <p>Paspor dapat diambil 4 hari kerja setelah pemohon selesai melakukan proses wawancara di Kantor Imigrasi.</p>
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
