<?php
if (isset($_POST['img'])) {
    $data = $_POST['img'];
    $data = str_replace('data:image/png;base64,', '', $data);
    $data = str_replace(' ', '+', $data);
    $data = base64_decode($data);
    $file = 'signatures/signature-' . time() . '.png';
    file_put_contents($file, $data);
    echo 'Success';
} else {
    echo 'No image data found.';
}
?>
