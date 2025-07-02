<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "PHP çalışıyor<br>";

// Verileri al
$ad = $_POST['ad'] ?? 'YOK';
$email = $_POST['email'] ?? 'YOK';
$mesaj = $_POST['mesaj'] ?? 'YOK';
$soru = $POST['soru'] ?? '' ;

/* Doğru cevap 5+3=8 */
if (trim($soru) !=="8"){
    echo "<h2>Güvenlik doğrulaması başarısız. Lütfen doğru yanıtı giriniz.</h2>";
    exit;
}
echo "Gelen ad: $ad <br>";
echo "Gelen email: $email <br>";
echo "Gelen mesaj: $mesaj <br>";

// Dosya yazımı
$dosya = fopen("mesajlar.txt", "a");

if ($dosya) {
    fwrite($dosya, "Ad: $ad\n");
    fwrite($dosya, "Email: $email\n");
    fwrite($dosya, "Mesaj: $mesaj\n");
    fwrite($dosya, "--------------------\n");
    fclose($dosya);
    echo "<h2>Mesaj kaydedildi ✅</h2>";
} else {
    echo "<h2>❌ mesajlar.txt oluşturulamadı</h2>";
}
?>