<?php
// 1. Veritabanı Bağlantısı
$host = 'localhost';
$db   = 'mackalib';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
} catch (PDOException $e) {
    die("Veritabanı bağlantı hatası: " . $e->getMessage());
}

// 2. Arama Terimi Kontrolü (Arama çubuğundan gelen veri)
$arama_kelimesi = isset($_GET['search']) ? trim($_GET['search']) : '';

if (!empty($arama_kelimesi)) {
    // Kullanıcı arama yaptıysa veritabanında kitap adı veya yazara göre filtrele
    $sorgu = $pdo->prepare("SELECT * FROM kitaplar WHERE kitap_adi LIKE :arama OR yazar LIKE :arama ORDER BY id DESC");
    $sorgu->execute(['arama' => "%$arama_kelimesi%"]);
} else {
    // Arama yapılmadıysa son eklenen kitapları en üstte gösterecek şekilde tümünü getir
    $sorgu = $pdo->query("SELECT * FROM kitaplar ORDER BY id DESC");
}

$kitaplar = $sorgu->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MackaLib | E-Kütüphane</title>
    <style>
        /* Genel Sayfa Ayarları (Rookiverse Tarzı Dark Mode) */
        body { 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            background-color: #0c0c0e; 
            color: #ffffff; 
            margin: 0; 
            padding: 20px; 
        }
        
        .header { 
            text-align: center; 
            margin-bottom: 50px; 
            margin-top: 30px;
        }
        
        .header h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            letter-spacing: 1px;
        }

        /* Arama Formu ve Çubuğu */
        .search-form {
            margin-bottom: 20px;
        }
        
        .search-bar { 
            padding: 14px 25px; 
            width: 80%; 
            max-width: 500px; 
            border-radius: 30px; 
            border: 2px solid #222; 
            background-color: #16161a;
            color: #fff;
            outline: none; 
            font-size: 16px; 
            transition: all 0.3s ease;
        }

        .search-bar:focus {
            border-color: #00ff88;
            box-shadow: 0 0 15px rgba(0, 255, 136, 0.2);
        }
        
        /* Modern Grid (Izgara) Sistemi - PC ve Mobil Uyumlu */
        .kitap-grid { 
            display: grid; 
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); 
            gap: 30px; 
            padding: 0 5%; 
        }
        
        /* Kitap Kartları */
        .kitap-kart { 
            background-color: #16161a; 
            padding: 20px; 
            border-radius: 18px; 
            text-align: center; 
            border: 1px solid #222;
            transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease; 
        }
        
        .kitap-kart:hover { 
            transform: translateY(-8px); 
            border-color: #00ff88;
            box-shadow: 0 12px 24px rgba(0, 255, 136, 0.15); 
        }
        
        /* CSS Tabanlı Premium Kitap Kapağı Tasarımı */
        .kitap-kapak { 
            width: 100%; 
            height: 260px; 
            background: linear-gradient(135deg, #232329, #111113); 
            border-radius: 12px; 
            margin-bottom: 18px; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            font-size: 50px;
            border: 1px solid #2a2a32;
            box-shadow: inset 0 0 20px rgba(0,0,0,0.5);
        }
        
        .kitap-baslik { 
            font-size: 18px; 
            margin: 10px 0 5px; 
            font-weight: 600; 
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        
        .kitap-yazar { 
            font-size: 14px; 
            color: #94a3b8; 
            margin-bottom: 18px; 
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        
        /* Premium Buton */
        .oku-buton { 
            display: block; 
            padding: 10px 0; 
            background-color: #00ff88; 
            color: #09090b; 
            text-decoration: none; 
            border-radius: 25px; 
            font-weight: bold; 
            font-size: 14px;
            transition: all 0.2s ease; 
        }
        
        .oku-buton:hover { 
            background-color: #ffffff;
            box-shadow: 0 4px 12px rgba(255, 255, 255, 0.2);
            transform: scale(1.02);
        }

        .sonuc-yok {
            grid-column: 1 / -1;
            text-align: center;
            color: #64748b;
            font-size: 18px;
            margin-top: 50px;
        }
    </style>
</head>
<body>

    <div class="header">
        <h1>📚 MackaLib</h1>
        <form method="GET" action="index.php" class="search-form">
            <input type="text" name="search" class="search-bar" placeholder="Kitap veya yazar ara..." value="<?= htmlspecialchars($arama_kelimesi) ?>">
        </form>
    </div>

    <div class="kitap-grid">
        <?php if (count($kitaplar) > 0): ?>
            <?php foreach ($kitaplar as $kitap): ?>
                <div class="kitap-kart">
                    <div class="kitap-kapak">📖</div>
                    <div class="kitap-baslik"><?= htmlspecialchars($kitap['kitap_adi']) ?></div>
                    <div class="kitap-yazar"><?= htmlspecialchars($kitap['yazar']) ?></div>
                    <a href="<?= htmlspecialchars($kitap['dosya_yolu']) ?>" target="_blank" class="oku-buton">Hemen Oku</a>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="sonuc-yok">🔍 Aradığınız kriterlere uygun bir kitap bulamadık.</div>
        <?php endif; ?>
    </div>

</body>
</html>