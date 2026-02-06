<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>LAPAK KANWIL SUMBAR - Feedback</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="images/logo.ico">

    <!-- CSS TAMBAHAN KHUSUS FORM -->
    <style>
    body{
        background:#f5f7fa; /* ganti hitam → netral ala imigrasi */
        color:#1f2937;
        font-family:Arial, sans-serif;
    }

    .hero{
        text-align:center;
        padding:40px 20px 20px;
    }

    .hero h1{
        font-size:24px; /* DIPERKECIL */
        line-height:1.4;
        font-weight:700;
    }

    .form-wrapper{
        max-width:900px; /* DIPERKECIL */
        margin:30px auto 60px;
        padding:0 20px;
    }

    .form-row{
        display:flex;
        gap:24px; /* lebih rapat */
        margin-bottom:20px;
    }

    .form-group{
        flex:1;
        display:flex;
        flex-direction:column;
    }

    label{
        margin-bottom:6px;
        font-size:14px; /* lebih kecil */
        font-weight:600;
    }

    input, textarea{
        background:#ffffff;
        border:1px solid #d1d5db;
        border-radius:12px; /* gak terlalu bulet */
        padding:12px 16px; /* DIPERKECIL */
        font-size:14px;
        outline:none;
    }

    textarea{
        resize:none;
        height:160px; /* DIPERKECIL */
    }

    button{
        margin-top:30px;
        width:100%;
        background:#10c288;
        color:#fff;
        border:none;
        padding:14px; /* DIPERKECIL */
        font-size:16px;
        font-weight:600;
        border-radius:12px;
        cursor:pointer;
    }

    button:hover{
        opacity:0.9;
    }

    @media(max-width:768px){
        .form-row{
            flex-direction:column;
            gap:16px;
        }

        .hero h1{
            font-size:20px;
        }
    }
    
</style>

</head>

<body>
    
<?php
    include "navbar.php";
?>

<section class="hero">
    <h1>
        HARAP MELUANGKAN WAKTU ANDA SEBENTAR<br>
        UNTUK MENGISI KOTAK SARAN
    </h1>
</section>

<!-- FORM SARAN -->
<div class="form-wrapper">
    <form action="kirim_feedback.php" method="post">
        <div class="form-row">
    <div class="form-group">
        <label>Nama *</label>
        <input type="text" name="nama" placeholder="Nama" required>
    </div>

    <div class="form-group">
        <label>Nomor HP *</label>
        <input type="tel" name="hp" placeholder="XXXX-XXXX-XXXX" required>
    </div>
</div>

<div class="form-group">
    <label>Saran *</label>
    <textarea name="saran" placeholder="Saran yang ingin disampaikan" required></textarea>
</div>

<button type="submit">Submit</button>

    </form>
</div>

<!-- ================= FOOTER ================= -->
<?php
    include "footer.php";
?>

</body>
</html>
