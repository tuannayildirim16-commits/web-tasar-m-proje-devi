<?php

$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$sifre = isset($_POST['password']) ? trim($_POST['password']) : '';


$dogruEmail = "b2412100001@sakarya.edu.tr";
$dogruSifre = "b2412100001";


if (empty($email) || empty($sifre)) {
    echo "<script>alert('Lütfen tüm alanları doldurunuz!'); window.location.href='login.html';</script>";
} 

elseif ($email === $dogruEmail && $sifre === $dogruSifre) {
    echo "<div style='text-align:center; margin-top:100px; font-family:sans-serif;'>";
    echo "<h1>Hoşgeldiniz " . htmlspecialchars($dogruSifre) . "</h1>";
    echo "<p>Giriş başarılı!</p>";
    echo "</div>";
} 

else {
    echo "<script>alert('Hatalı kullanıcı adı veya şifre!'); window.location.href='login.html';</script>";
}
?>