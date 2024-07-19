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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengiriman Email</title>
</head>
<body>
    <h2>Kirim Pesan</h2>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
        <label for="name">Nama:</label><br>
        <input type="text" id="name" name="name"><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>

        <label for="message">Pesan:</label><br>
        <textarea id="message" name="message"></textarea><br><br>

        <input type="submit" value="Kirim">
    </form>

    <?php
    // Tampilkan pesan sukses atau error
    if (!empty($status)) {
        echo "<p>$status</p>";
    }
    ?>
</body>
</html>
