<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>LAPAK KANWIL SUMBAR - Paspor Hilang</title>
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
    <h2>Paspor Hilang</h2>
    <img src="images/slide9.jpeg" alt="Paspor Hilang">

    <div class="detail-content">
        <h3>Penting Untuk Diperhatikan</h3>
        <p>Kunjungi Kantor Imigrasi terdekat sesuai dengan wilayah domisili. 
            Untuk paspor hilang anda TIDAK diwajibkan mendaftar melalui M-Paspor</p>
            
        <h3>Persyaratan</h3>
<ol>
  <li>e-KTP.</li>
  <li>Kartu Keluarga (KK).</li>
  <li>Akta lahir/Ijazah/Buku nikah.</li>
  <li>Surat Keterangan Kehilangan dari Kepolisian.</li>
</ol>

<p><em>
  (Harap membawa dokumen asli dan fotokopi dokumen masing-masing 1 lembar ketika datang ke Kantor Imigrasi)
</em></p>

<h3>Proses Berita Acara Pemeriksaan (BAP) Paspor Hilang:</h3>
<ol>
  <li>
    Datang ke Kantor Imigrasi terdekat untuk mengajukan penggantian paspor.
  </li>
  <li>Serahkan semua dokumen persyaratan yang telah Anda siapkan.</li>
  <li>
    Anda akan menjalani Berita Acara Pemeriksaan (BAP) oleh petugas imigrasi.
  </li>
  <li>
    Proses BAP dilakukan untuk meminta keterangan kronologi kehilangan paspor. 
  </li>
  <li>
    Setelah proses BAP selesai, Anda akan diwajibkan membayar denda biaya karena 
    paspor hilang, sesuai dengan ketentuan yang berlaku.
  </li>
  <li>Penggantian paspor akan dilaksanakan setelah Anda melakukan pembayaran dan proses pemeriksaan telah selesai. </li>
  
</ol>
<h3>Catatan</h3>
<ol type="a">
  <li>
     Anda <strong>akan dikenakan biaya denda sebesar Rp 1.000.000 diluar biaya</strong> pembuatan paspor baru. 
     <ul><li> Apabila paspor anda hilang akibat bencana alam, seperti banjir, gempa bumi, dan  kebakaran maka 
              termasuk ke dalam kondisi kahar dan dibebaskan dari biaya denda. Untuk detail informasi mengenai 
              penggantian paspor karena keadaan kahar dapat diakses melalui tautan ini : <a href="detaill4.html" style="color: white;">Klik di sini</a>

</li></ul> 
  </li>
  <li>
    Jika Anda mengalami kehilangan paspor saat berada di luar negeri, segera laporkan ke Perwakilan Republik 
    Indonesia (KBRI/Kedutaan Besar) setempat.
  </li>
  
</ol>

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
