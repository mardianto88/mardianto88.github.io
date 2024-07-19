<?php
// Variabel untuk menyimpan pesan sukses atau error
$status = "";

// Proses form hanya jika ada data yang dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari form input
    $to = "mardianto.usn88@gmail.com"; // Ganti dengan alamat email penerima
    $subject = "Pesan dari Form Kontak"; // Subjek email
    $name = $_POST["name"]; // Nama pengirim
    $email = $_POST["email"]; // Email pengirim
    $message = $_POST["message"]; // Isi pesan

    // Validasi sederhana (bisa disesuaikan dengan kebutuhan)
    if (empty($name) || empty($email) || empty($message)) {
        $status = "Semua bidang harus diisi!";
    } else {
        // Format pesan email
        $content = "Nama: $name\n";
        $content .= "Email: $email\n\n";
        $content .= "Pesan:\n$message\n";

        // Header email
        $headers = "From: $name <$email>";

        // Kirim email menggunakan fungsi mail() PHP
        if (mail($to, $subject, $content, $headers)) {
            $status = "Pesan berhasil terkirim!";
        } else {
            $status = "Maaf, ada masalah dalam pengiriman email.";
        }
    }
}
?>
