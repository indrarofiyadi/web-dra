<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    $to = "your-email@example.com"; // Ganti dengan email kamu
    $subject = "Pesan dari Portofolio Pribadi";
    $body = "Nama: $name\nEmail: $email\n\nPesan:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Pesan berhasil dikirim!";
    } else {
        echo "Terjadi kesalahan saat mengirim pesan.";
    }
} else {
    echo "Metode pengiriman tidak valid.";
}
?>
