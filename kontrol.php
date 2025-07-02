<?php
/* Kullanıcıdan gelen veriyi alır */
$kullanici = $_POST['kullanici'];
$sifre = $_POST['sifre'];

/* Örnek Bilgi */
$dogru_kullanici = "admin";
$dogru_sifre = "1234";

/* Giriş Kontrolü */
if ($kullanici=== $dogru_kullanici && $sifre=== $dogru_sifre) {
    echo "<h2>Giriş başarılı. Hoş geldin, $kullanici!</h2>";
} else {
    echo "<h2>Kullanıcı adı veya şifre hatalı.</h2>";
}
?>