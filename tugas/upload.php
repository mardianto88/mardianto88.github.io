<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Folder tempat file akan disimpan
    $target_dir = "uploads/";
    
    // Membuat folder jika belum ada
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    // Mengambil informasi file yang diunggah
    $file_name = basename($_FILES["file"]["name"]);
    $target_file = $target_dir . $file_name;
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
    // Validasi NIM
    $nim = $_POST['nim'];
    if (empty($nim)) {
        echo "NIM harus diisi.";
        $uploadOk = 0;
    }
    
    // Periksa apakah file sudah ada
    if (file_exists($target_file)) {
        echo "Maaf, file sudah ada.";
        $uploadOk = 0;
    }
    
    // Periksa ukuran file (contoh maksimal 5MB)
    if ($_FILES["file"]["size"] > 5000000) {
        echo "Maaf, ukuran file terlalu besar.";
        $uploadOk = 0;
    }
    
    // Batasi jenis file yang diperbolehkan
    $allowed_types = ['pdf', 'doc', 'docx', 'ppt', 'pptx'];
    if (!in_array($fileType, $allowed_types)) {
        echo "Maaf, hanya file PDF, DOC, DOCX, PPT, dan PPTX yang diperbolehkan.";
        $uploadOk = 0;
    }
    
    // Periksa apakah $uploadOk bernilai 0 karena ada kesalahan
    if ($uploadOk == 0) {
        echo "Maaf, file Anda tidak dapat diunggah.";
    } else {
        // Jika semua pemeriksaan lolos, unggah file
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            echo "File ". htmlspecialchars($file_name) . " berhasil diunggah.<br>";
            echo "NIM: " . htmlspecialchars($nim) . "<br>";
            echo "Nama File: " . htmlspecialchars($file_name) . "<br>";
            echo "Ukuran File: " . $_FILES["file"]["size"] . " bytes<br>";
        } else {
            echo "Maaf, terjadi kesalahan saat mengunggah file.";
        }
    }
}
?>
