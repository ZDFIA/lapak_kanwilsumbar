<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>LAPAK KANWIL SUMBAR - Permohonan Paspor Anak</title>
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
    <h2>Permohonan Paspor Anak</h2>
    <img src="images/slide6.jpeg" alt="Permohonan Paspor Anak">

    <div class="detail-content">
        <h3>Permohonan Paspor Anak</h3>
        <p><strong>Perlu diperhatikan</strong> bahwa permohonan paspor anak, baik untuk permohonan paspor baru atau pergantian paspor ditujukan untuk anak dibawah 17 tahun, 
            kecuali untuk balita yang dapat langsung datang ke Kantor Imigrasi (layanan prioritas). Permohonan paspor dapat diajukan dengan 
            melampirkan dokumen kelengkapan persyaratan. Untuk permohonan paspor baru dan pergantian paspor anak, wajib mendaftar melalui M-Paspor (kecuali Balita).</p>
        <h3>persyaratan :</h3>
        <ol class="list-syarat">
    <li>e-KTP Kedua orang tua</li>
    <li>Kartu Keluarga (KK)</li>
    <li>Akta Kelahiran Anak</li>
    <li>Buku nikah orang tua</li>
    <li>Paspor kedua orang tua (jika ada)</li>
    <li>Paspor lama anak (khusus untuk pergantian paspor). </li>
    <li><strong>Untuk orang tua yang sudah bercerai,</strong> lampirkan Akta Cerai dan Surat Keputusan Pengadilan tentang Hak Asuh Anak.</li>
            <p class="catatan">
            (Harap membawa dokumen asli dan fotokopi dokumen masing-masing 1 lembar ketika datang ke Kantor Imigrasi) 
        </p>
</ol>
      <h3 class="sub-judul">Ketentuan Tambahan :</h3>

<ul class="ketentuan-tambahan">
    <li>
        <strong>Pendampingan Orang Tua</strong>
        <ol type="a">
            <li>Kedua orang tua wajib hadir pada saat wawancara dan pengajuan paspor.</li>
            <li>
                Jika salah satu orang tua berhalangan hadir, orang tua yang tidak hadir
                dapat memberikan surat kuasa bermaterai kepada orang tua yang hadir,
                namun semua dokumen lain tetap harus dilampirkan.
            </li>
        </ol>
    </li>

    <li>
        <strong>Pendaftaran Aplikasi M-Paspor:</strong>
        Pemohon diwajibkan menggunakan aplikasi M-Paspor untuk mendapatkan antrian.
    </li>

    <li>
        <strong>Konsistensi Data:</strong>
        Pastikan data diri anak dan orang tua konsisten dan sama di semua dokumen
        (KTP, KK, Akta Lahir, dll) agar permohonan tidak tertunda.
    </li>
</ul>
  
      
    </div>

    <div class="lihat-lainnya" style="margin-top:40px;">
        <a href="/">Kembali ke Home</a>
    </div>
</section>

<!-- ================= FOOTER ================= -->
<?php
    include "footer.php";
?>

</body>
</html>
