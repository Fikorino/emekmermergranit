# Emek Mermer Antalya - PHP Projesi

## 1) XAMPP Kurulumu
- https://www.apachefriends.org/ adresinden XAMPP indirin ve kurun.
- XAMPP Control Panel üzerinden **Apache** ve **MySQL** servislerini başlatın.

## 2) Projeyi htdocs'a Koyma
- Proje klasörünü şu dizine kopyalayın:
  - `C:/xampp/htdocs/emekmermerantalya/`

## 3) phpMyAdmin ile Veritabanı Oluşturma
- Tarayıcıdan `http://localhost/phpmyadmin` açın.
- **Veritabanları** sekmesine girin.
- Yeni veritabanı oluşturun: `emekmermerantalya`

## 4) schema.sql Import
- phpMyAdmin içinde `emekmermerantalya` veritabanını seçin.
- **İçe Aktar** sekmesine girin.
- `database/schema.sql` dosyasını seçip içe aktarın.

## 5) seed.sql Import
- Aynı şekilde `database/seed.sql` dosyasını içe aktarın.

## 6) config/db.php Düzenleme
- `config/db.php` dosyasını açın.
- Kullanıcı adı ve şifre bilgilerini kendi MySQL ayarınıza göre düzenleyin.

## 7) Localhost'ta Siteyi Açma
- Tarayıcıdan şu adresi açın:
  - `http://localhost/emekmermerantalya/`
- Menüdeki tüm sayfalar **index.php yazmadan** açılır.

## 8) Admin Panel Giriş
- Admin panel adresi:
  - `http://localhost/emekmermerantalya/admin`
- Varsayılan giriş bilgileri:
  - E-posta: `admin@emekmermerantalya.com`
  - Şifre: `admin123`

## 9) FileZilla ile cPanel'e Taşıma
- cPanel bilgilerinizi alın.
- FileZilla ile sunucuya bağlanın.
- Proje dosyalarını ana dizine yükleyin (domain kökü).
- `public/` klasörü sadece asset ve upload içerir, **taşınmalıdır**.

## 10) Canlıya Alınca Yapılacaklar
- cPanel üzerinden MySQL veritabanı oluşturun.
- `schema.sql` ve `seed.sql` dosyalarını içe aktarın.
- `config/db.php` dosyasını cPanel veritabanı bilgilerine göre güncelleyin.
- Alan adınızı açın:
  - `https://emekmermerantalya.com/`

## Ek Bilgi
- Upload dizini: `public/uploads/`
- Görsel yüklemeleri admin panel üzerinden yapılır.
- Menü linkleri **BASE_URL** mantığıyla çalışır ve localhost/cPanel farkı yoktur.
