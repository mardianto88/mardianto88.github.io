<?php
require 'vendor/autoload.php';
use setasign\Fpdi\Fpdi;

if (isset($_FILES['signature']) && $_FILES['signature']['error'] == 0) {
    $uploadDir = 'uploads/';
    $uploadFile = $uploadDir . basename($_FILES['signature']['name']);

    // Pastikan direktori upload ada dan dapat ditulis
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    // Pindahkan file yang diunggah ke direktori tujuan
    if (move_uploaded_file($_FILES['signature']['tmp_name'], $uploadFile)) {
        // Load an existing PDF
        $pdf = new Fpdi();
        $pdf->AddPage();
        $pageCount = $pdf->setSourceFile('example.pdf'); // Replace with your PDF file
        $tplId = $pdf->importPage(1);
        $pdf->useTemplate($tplId);

        // Add the signature image to the PDF
        $pdf->Image($uploadFile, 10, 10, 40, 20); // Adjust the position and size as needed

        // Output the new PDF with the signature
        $outputFile = 'signed_document.pdf';
        $pdf->Output('F', $outputFile);

        echo 'Tanda tangan berhasil diunggah dan ditambahkan ke PDF!';
    } else {
        echo 'Gagal mengunggah file.';
    }
} else {
    echo 'Tidak ada file yang diunggah atau terjadi kesalahan.';
}
?>
