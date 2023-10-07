<?php
$host = "localhost"; // Ganti dengan host database Anda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$database = "clear"; // Ganti dengan nama database Anda

// Membuat koneksi ke database
$koneksi = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi ke database gagal: " . $koneksi->connect_error);
}

// Set karakter encoding ke UTF-8 jika perlu
$koneksi->set_charset("utf8");

// Sekarang, variabel $koneksi dapat digunakan untuk menjalankan query SQL di aplikasi Anda.
?>
