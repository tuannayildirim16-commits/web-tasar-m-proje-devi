<?php

// Formdan gelen verileri alıyoruz ve boşlukları temizliyoruz
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$sifre = isset($_POST['password']) ? trim($_POST['password']) : '';

// Senin belirlediğin özel giriş bilgileri
$dogruEmail = "tuanna.yildirim@ogr.sakarya.edu.tr"; 
$dogruSifre = "B251210026"; 

// 1. Durum: Alanlar boş bırakıldıysa
if (empty($email) || empty($sifre)) {
    echo "<script>alert('Lütfen tüm alanları doldurunuz!'); window.location.href='login.html';</script>";
} 

// 2. Durum: Bilgiler doğruysa
elseif ($email === $dogruEmail && $sifre === $dogruSifre) {
    // Önce hoş geldin mesajı veriyoruz, sonra ana sayfaya yönlendiriyoruz
    echo "<script>
            alert('$dogruSifre numaralı öğrenci sisteme hoş geldi!');
            window.location.href = 'web tasarımı proje ödevi.html'; 
          </script>";
} 

// 3. Durum: Bilgiler hatalıysa
else {
    echo "<script>alert('Hatalı kullanıcı adı veya şifre!'); window.location.href='login.html';</script>";
}

?>