<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>LAPAK KANWIL SUMBAR - Frequently Asked Question</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="images/logo.ico">

    <!-- CSS MODAL (TAMBAHAN, AMAN) -->
    <style>
        .faq-btn{
            background:#0B3C5D;
            color:#fff;
            padding:14px 24px;
            border:none;
            border-radius:10px;
            font-size:18px;
            cursor:pointer;
            margin-top:20px;
        }

        .modal-overlay{
            position:fixed;
            top:0;
            left:0;
            width:100%;
            height:100%;
            background:rgba(0,0,0,0.7);
            display:none;
            justify-content:center;
            align-items:center;
            z-index:9999;
        }

        .modal-box{
            background:#1f1f1f;
            color:#fff;
            padding:25px;
            max-width:700px;
            width:90%;
            border-radius:14px;
            position:relative;
        }

        .modal-box h3{
            color:#00eaff;
            margin-bottom:10px;
        }

        .close-btn{
            position:absolute;
            top:10px;
            right:15px;
            font-size:22px;
            background:none;
            border:none;
            color:#00eaff;
            cursor:pointer;
        }
    </style>
</head>

<body>

<?php
    include "navbar.php";
?>

<div style="height: 70px;"></div>

<section class="layanan-section">
    <h2 class="info-title">SEPUTAR PASPOR</h2>

<div class="faq-container">

  <div class="faq-item active">
    <button class="faq-question">
      Apa syarat untuk pengurusan paspor baru atau penggantian paspor?
      <span class="icon">×</span>
    </button>
    <div class="faq-answer">
      <p>
        Syarat untuk pengurusan paspor adalah dengan menyiapkan KTP Elektronik,
        Kartu Keluarga, dan didukung oleh dokumen akta lahir/buku nikah/ijazah
        asli beserta fotokopi. Untuk penggantian paspor lama keluaran tahun
        2009 ke atas cukup dengan membawa KTP Elektronik dan paspor lama
        (tidak berlaku untuk paspor hilang, rusak, atau keluaran KBRI).
      </p>
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-question">
      Apa syarat untuk pengurusan paspor anak?
      <span class="icon">+</span>
    </button>
    <div class="faq-answer">
      <p>
         Untuk Persayaratan pengurusan paspor anak silahkan 
         menyiapkan KTP Elektronik kedua orang tua, Kartu Keluarga,
         Akta Lahir, Buku Nikah, Paspor orang tua, Sertakan dokumen
         asli dan foto copy
      </p>
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-question">
      Berapa lama proses pembuatan paspor?
      <span class="icon">+</span>
    </button>
    <div class="faq-answer">
      <p>
         Paspor selesai dalam <strong>4 hari kerja</strong> setelah
         melakukan proses wawancara
      </p>
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-question">
      Bagaimana jika status pembayaran di M-Paspor saya 
      tidak berubah setelah melakukan pembayaran?
      <span class="icon">+</span>
    </button>
    <div class="faq-answer">
      <p>
         Apabila status pembayaran di M-Paspor ssaya tidak berubah
         setelah melakukan pembayaran, mohon untuk menunggu
         hingga 1x24 jam setelah pembayaran berhasil dan mengecek 
         segera berkala pada aplikasi M-Paaspor
      </p>
      <p>Apabila anda masih mengalami kendala, silahkan menghubungi <strong>WA keterampilan</strong>
         dengan melampirkan bukti bayar dn menginformasikan bukti
         bayar dan menginformasikan Nama Lengkap, NIK, Kode Billing
         dan Kode Permohonan</p>
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-question">
      Apabila Paspor saya rusak/hilang, apakah saya dapat
      mendaftar melalui Aplikasi M-Paspor?
      <span class="icon">+</span>
    </button>
    <div class="faq-answer">
      <p>
         Jika paspor Sahabat Mido rusak/hilang, dapat langsung 
         ke kantor dan menuju bagian Inteldakim tanpa mendaftar
         melalui Aplikasi M-Paspor
      </p> 
    </div>
  </div>

</div>
<script>
const faqItems = document.querySelectorAll(".faq-item");

faqItems.forEach(item => {
  const btn = item.querySelector(".faq-question");
  const icon = item.querySelector(".icon");

  btn.addEventListener("click", () => {
    faqItems.forEach(i => {
      if(i !== item){
        i.classList.remove("active");
        i.querySelector(".icon").textContent = "+";
      }
    });

    item.classList.toggle("active");
    icon.textContent = item.classList.contains("active") ? "×" : "+";
  });
});
</script>

<!-- ================= FOOTER ================= -->
<?php
    include "footer.php";
?>
<script src="hamburger.js"></script>
</body>
</html>
