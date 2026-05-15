<?php
// Bu dosya adı mutlaka gonder.php olmalı (HTML'deki action ile aynı)

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdaki 'name' özniteliklerine (attribute) göre verileri çekiyoruz
    $ad_soyad = htmlspecialchars($_POST['name'] ?? 'Girilmedi');
    $email    = htmlspecialchars($_POST['email'] ?? 'Girilmedi');
    $konu     = htmlspecialchars($_POST['subject'] ?? 'Girilmedi');
    $mesaj    = htmlspecialchars($_POST['message'] ?? 'Girilmedi');

    echo "<!DOCTYPE html>
    <html lang='tr'>
    <head>
        <meta charset='UTF-8'>
        <title>Form Sonucu</title>
        <style>
            body { background-color: #f0f2f5; font-family: 'Segoe UI', sans-serif; display: flex; align-items: center; justify-content: center; min-height: 100vh; margin: 0; }
            .card { background: white; padding: 30px; border-radius: 15px; box-shadow: 0 10px 25px rgba(0,0,0,0.1); width: 400px; text-align: center; }
            h2 { color: #0d6efd; border-bottom: 2px solid #0d6efd; padding-bottom: 10px; }
            .data { text-align: left; margin-top: 20px; background: #f8f9fa; padding: 15px; border-radius: 8px; border-left: 5px solid #20c997; }
            .back-link { display: inline-block; margin-top: 20px; padding: 10px 20px; background: #20c997; color: white; text-decoration: none; border-radius: 5px; font-weight: bold; }
        </style>
    </head>
    <body>
        <div class='card'>
            <h2>Mesajınız İletildi</h2>
            <div class='data'>
                <p><strong>İsim:</strong> $ad_soyad</p>
                <p><strong>E-posta:</strong> $email</p>
                <p><strong>Konu:</strong> $konu</p>
                <p><strong>Mesaj:</strong> $mesaj</p>
            </div>
            <a href='iletisim.html' class='back-link'>Tamam - Geri Dön</a>
        </div>
    </body>
    </html>";
}
?>