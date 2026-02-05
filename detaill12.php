<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Ketentuan Pengambilan Paspor</title>
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
    <h2>Ketentuan Pengambilan Paspor</h2>
    <img src="images/slide13.jpeg" alt="Ketentuan Pengambilan Paspor">

     <div class="content">

  <h3>1. Pengambilan oleh Pemohon Sendiri</h3>

  <p class="sub-title">Dokumen yang Dibawa:</p>
  <ol type="a">
    <li>Tanda bukti pengantar dari petugas wawancara</li>
    <li>E-KTP</li>
    <li>Bukti pembayaran paspor</li>
  </ol>

  <p class="prosedur">
    <strong>Prosedur:</strong>
    Datang ke kantor imigrasi sesuai jadwal dan tunjukkan dokumen tersebut
    untuk mengambil paspor Anda.
  </p>

  <h3>2. Pengambilan oleh Keluarga (Satu KK)</h3>

  <p class="sub-title">Dokumen yang Dibawa:</p>
  <ol type="a">
    <li>Tanda bukti pengantar dari petugas wawancara</li>
    <li>e-KTP asli pengambil paspor</li>
  </ol>

  <p class="prosedur">
    <strong>Prosedur:</strong>
    Seseorang yang terikat hubungan keluarga dalam satu KK dapat mengambil
    paspor pemohon dengan membawa dokumen-dokumen di atas.
  </p>

  <h3>3. Pengambilan oleh Orang Lain (Beda KK) </h3>

  <p class="sub-title">Dokumen yang Dibawa:</p>
  <ol type="a">
    <li>Surat kuasa bermeterai Rp10.000 yang ditandatangani oleh pemohon</li>
    <li>Fotokopi KTP pengambil paspor</li>
    <li>Tanda bukti pengantar dari petugas wawancara</li>
    <li>Bukti pembayaran paspor</li>
  </ol>

  <p class="prosedur">
    <strong>Prosedur:</strong>
     Orang lain di luar keluarga inti, bisa mewakili pengambilan paspor dengan surat kuasa khusus. 
  </p>

  <h3>Informasi Tambahan </h3>

  <ul>
    <li><strong>Jadwal Pengambilan :</strong> Jam 14.00 WIB sesuai dengan surat pengambilan paspor yang diserahkan oleh petugas.</li>
    <li><strong>Batas Waktu :</strong> Paspor harus diambil dalam waktu 30 hari setelah diterbitkan, jika tidak akan dibatalkan. 
        (berdasarkan Pasal 30 huruf (d) Permenkumham Nomor 8 Tahun 2014)</li>
        <li><strong>Layanan Pengantaran :</strong> Beberapa Kantor Imigrasi bekerja sama dengan PT Pos Indonesia untuk pengiriman 
            paspor ke alamat Anda, yang merupakan layanan berbayar. </li>
  </ul>
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
