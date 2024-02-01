
<?php
$db = mysqli_connect("localhost", "root", "", "sertifikasi");

// Memeriksa koneksi
if (!$db) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
