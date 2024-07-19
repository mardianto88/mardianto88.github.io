<?php
// Ambil data dari formulir
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Alamat email tujuan
$to = 'mardianto.usn88@gmail.com';

// Subject email
$subject = 'Pesan dari Form Kontak';

// Isi pesan email
$body = "Nama: $name\n" .
        "Email: $email\n" .
        "Pesan:\n$message";

// Header email
$headers = "From: $email";

// Kirim email
if (mail($to, $subject, $body, $headers)) {
    echo '<p>Email telah terkirim!</p>';
} else {
    echo '<p>Maaf, email gagal terkirim.</p>';
}
?>
