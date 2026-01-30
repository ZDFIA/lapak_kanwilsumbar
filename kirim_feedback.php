<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama  = htmlspecialchars($_POST['nama']);
    $hp    = htmlspecialchars($_POST['hp']);
    $saran = htmlspecialchars($_POST['saran']);

    $tujuan = "fadlyihsanandanny@gmail.com"; // GANTI EMAIL TUJUAN
    $subjek = "Feedback Website Imigrasi Sumatera Barat";

    $pesan = "
    Nama      : $nama
    Nomor HP  : $hp

    Saran:
    $saran
    ";

    $header  = "From: Website Imigrasi Sumbar <no-reply@imigrasisumbar.go.id>\r\n";
    $header .= "Content-Type: text/plain; charset=UTF-8";

    if (mail($tujuan, $subjek, $pesan, $header)) {
        echo "<script>
            alert('Terima kasih, saran Anda telah terkirim.');
            window.location.href='feedback.html';
        </script>";
    } else {
        echo "<script>
            alert('Maaf, terjadi kesalahan. Silakan coba lagi.');
            window.history.back();
        </script>";
    }
}
?>
