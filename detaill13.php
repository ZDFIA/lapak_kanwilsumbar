<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tata Cara Pembayaran Paspor</title>
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
    <h2>Tata Cara Pembayaran Paspor</h2>
    <img src="images/slide14.jpeg" alt="Tata Cara Pembayaran Paspor">

     <div class="content">

  <h3>1. Tata Cara Pembayaran Paspor</h3>

  <p class="sub-title">A. Melalui M-Banking</p>
  <ol type="a">
    <li>Byond</li>
     <ul><li>Buka Aplikasi Byond by BSI</li></ul>
     <ul><li>Pilih Menu Pembayaran</li></ul>
     <ul><li>Pilih Pajak/Cukai/SBN/Paspor</li></ul>
     <ul><li>Masukkan Kode Billing</li></ul>
     <li>Brimo</li>
     <ul><li>Buka Aplikasi BRIMO</li></ul>
     <ul><li>Pilih Menu Lainnya</li></ul>
     <ul><li>Pilih Pajak & Retribusi</li></ul>
     <ul><li>Pilih Penerimaan Negara</li></ul>
     <ul><li>Masukkan Kode Billing</li></ul>
  </ol>

  <p class="sub-title">B. Melalui Dompet Digital</p>
  <ol type="a">
    <li>Dana</li>
     <ul><li>Buka Aplikasi Dana</li></ul>
     <ul><li>Pilih Menu Lihat Semua</li></ul>
     <ul><li>Masuk Kategori Bills</li></ul>
     <ul><li>Pilih Penerimaan Negara</li></ul>
     <ul><li>Pilih Penerimaan Negara Bukan Pajak</li></ul>
     <ul><li>Masukkan Billing</li></ul>
     <li>Gopay</li>
     <ul><li>Buka Aplikasi Gopay</li></ul>
     <ul><li>Pilih Menu Lihat Semua</li></ul>
     <ul><li>Pilih Layanan Publik</li></ul>
     <ul><li>Pilih Penerimaan Negara</li></ul>
     <ul><li>Pilih PNBP</li></ul>
     <ul><li>Masukkan Kode Billing</li></ul>
  </ol>

  <p class="sub-title">C. Melalui ATM</p>
  <ol type="a">
    <li>BSI</li>
     <ul><li>Pilih Transaksi Lainnya</li></ul>
     <ul><li>Pilih Pembayaran</li></ul>
     <ul><li>Pilih Lainnya</li></ul>
     <ul><li>Pilih MPN/Pajak</li></ul>
     <ul><li>Masukkan Kode Billing</li></ul>
     <li>BCA</li>
     <ul><li>Pilih Pembayaran</li></ul>
     <ul><li>Pilih MPN/Pajak</li></ul>
     <ul><li>Pilih Penerimaan Negara</li></ul>
     <ul><li>Masukkan Kode Billing</li></ul>
     <ul><li>Lakukan Konfirmasi Pembayaran</li></ul>
  </ol>
  <p class="sub-title">D. Melalui PT. POS INDONESIA</p>
  <ul><ul>
  <li>Bawa Kode Billing yang telah didapat pada aplikasi M-Paspor</li>
  <li>Datang ke Bank Terdekat</li>
  <li>Informasikan kepada Teller Kode Billing</li>
  <li>Teller Akan Melakukan Konfirmasi Pembayaran</li>
  <li>Lakukan Pembayaran</li>
  <li>Simpan Bukti Bayar Untuk Digunakan Pada Saat Mengambil Paspor</li>
</ul>
   </ul>
   <p class="sub-title">E. Melalui Indomaret</p>
  <ul><ul>
  <li>Kunjungi gerai indomaret dan sampaikan kepada kasir bahwa Anda ingin melakukan pembayaran PNBP</li>
  <li>Kasir akan meminta Kode Billing yang sudah Anda terima melalui aplikasi M-Paspor dan selanjutnya kasir melakukan konfirmasi pembayaran</li>
  <li>Lakukan pembayaran dan simpan struk pembayaran untuk pengambilan paspor</li> 
</ul>
   </ul>
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
