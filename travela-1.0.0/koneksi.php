<?php
$servername = "localhost"; // Ganti dengan hostname database kamu
$database = "nama_database_kamu"; // Ganti dengan nama database kamu
$username = "username_database_kamu"; // Ganti dengan username database kamu
$password = "password_database_kamu"; // Ganti dengan password database kamu

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
// echo "Koneksi berhasil"; // Uncomment baris ini untuk mengetes koneksi

?>