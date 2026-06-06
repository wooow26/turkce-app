import requests
import os

# PDF'leri kaydedeceğimiz klasör
os.makedirs("kitaplar", exist_ok=True)

# Örnek bir telifsiz kaynak (Project Gutenberg veya benzeri)
# Not: Buradaki URL'leri test amaçlı manuel belirleyebilirsin
kitap_listesi = {
    "Sabahattin Ali - Kuyucakli Yusuf": "https://ia800905.us.archive.org/26/items/kuyucakliyusuf00sabauoft/kuyucakliyusuf00sabauoft.pdf",
    "Omer Seyfettin - Secme Hikayeler": "https://ia800902.us.archive.org/3/items/sechikayeler00seyfuoft/sechikayeler00seyfuoft.pdf"
    # Buraya 10 taneye tamamlayacak linkleri ekleyebilirsin
}

for isim, url in kitap_listesi.items():
    print(f"İndiriliyor: {isim}...")
    cevap = requests.get(url)
    with open(f"kitaplar/{isim}.pdf", "wb") as f:
        f.write(cevap.content)

print("10 kitap başarıyla indirildi!")