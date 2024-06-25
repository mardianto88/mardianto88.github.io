<?php
$host = '103.94.0.70'; // Alamat IP server MySQL
$port = '3306'; // Port MySQL, default adalah 3306
$dbname = 'tugas';
$username = 'afika';
$password = 'afika123';

// Membuat koneksi
$mysqli = mysqli_connect($host, $username, $password, $dbname, $port);

// Periksa koneksi
if (!$mysqli) {
    echo "Koneksi gagal: " . mysqli_connect_error();
} else {
    echo "Koneksi ke MySQL berhasil!";
}

// Menutup koneksi
mysqli_close($mysqli);
?>
