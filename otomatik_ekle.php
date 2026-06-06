<?php
// Veritabanı bağlantısı
$host = 'localhost';
$db   = 'mackalib';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
} catch (PDOException $e) {
    die("Bağlantı hatası: " . $e->getMessage());
}

// "kitaplar" klasöründeki tüm PDF'leri bul
$pdfDosyalar = glob("kitaplar/*.pdf");
$eklenenSayi = 0;

foreach ($pdfDosyalar as $dosya) {
    // "kitaplar/Sabahattin Ali - Sırça Köşk.pdf" kısmından ismi ayıkla
    $dosyaAdi = basename($dosya, ".pdf"); 
    
    // Tireden (-) bölerek yazar ve kitap adını ayır
    $parcalar = explode("-", $dosyaAdi);
    
    if (count($parcalar) >= 2) {
        $yazar = trim($parcalar[0]);
        $kitapAdi = trim($parcalar[1]);
        
        // Bu kitap zaten ekli mi diye kontrol et (aynı kitabı 2 kez eklememek için)
        $kontrol = $pdo->prepare("SELECT id FROM kitaplar WHERE dosya_yolu = ?");
        $kontrol->execute([$dosya]);
        
        if ($kontrol->rowCount() == 0) {
            // Kitap yoksa veritabanına ekle
            $ekle = $pdo->prepare("INSERT INTO kitaplar (kitap_adi, yazar, dosya_yolu) VALUES (?, ?, ?)");
            $ekle->execute([$kitapAdi, $yazar, $dosya]);
            $eklenenSayi++;
        }
    }
}

echo "İşlem tamam! Veritabanına yeni eklenen kitap sayısı: " . $eklenenSayi;
?>