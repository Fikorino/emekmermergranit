INSERT INTO users (name, email, password_hash) VALUES
('Admin', 'admin@emekmermerantalya.com', '$2y$12$HIBBwy5EuiEbGGozBCevH.wCWRAbUOkSDIm9lOV5gaWx.5kS0RweC');

INSERT INTO settings (`key`, value) VALUES
('site_name', 'Emek Mermer Antalya'),
('phone', '+90 242 000 0000'),
('email', 'info@emekmermerantalya.com'),
('address', 'Antalya, Türkiye'),
('logo_path', 'assets/logo.svg');

INSERT INTO sliders (title, subtitle, image_path, sort_order, is_active) VALUES
('Antalya Mermer Ustası', 'Profesyonel ölçü ve montaj', 'assets/placeholder.svg', 1, 1),
('Granit ve Kuvars Tezgah', 'Dayanıklı ve şık çözümler', 'assets/placeholder.svg', 2, 1),
('Özel Proje Uygulamaları', 'Merdiven ve dış cephe kaplama', 'assets/placeholder.svg', 3, 1);

INSERT INTO categories (name, slug, description) VALUES
('Mermer Tezgah', 'mermer-tezgah', 'Mutfak ve banyo için mermer tezgah uygulamaları'),
('Granit Tezgah', 'granit-tezgah', 'Dayanıklı granit tezgah seçenekleri'),
('Çimstone', 'cimstone', 'Kuvars esaslı çimstone modelleri');

INSERT INTO products (category_id, name, slug, description, image_path) VALUES
(1, 'Calacatta Mermer Tezgah', 'calacatta-mermer-tezgah', 'Klasik ve zarif görünüm sunan calacatta mermer tezgah.', 'assets/placeholder.svg'),
(2, 'Siyah Granit Tezgah', 'siyah-granit-tezgah', 'Yoğun kullanım için ideal, dayanıklı siyah granit.', 'assets/placeholder.svg'),
(3, 'Beyaz Çimstone Tezgah', 'beyaz-cimstone-tezgah', 'Minimal ve modern mekanlar için çimstone.', 'assets/placeholder.svg');

INSERT INTO faqs (question, answer) VALUES
('Mermer tezgah bakımı nasıl yapılır?', 'Yumuşak temizleyiciler ve nemli bezle düzenli bakım yapılmalıdır.'),
('Granit tezgah çizilir mi?', 'Granit dayanıklıdır ancak keskin darbelere karşı korunmalıdır.'),
('Çimstone fiyatları nasıl belirlenir?', 'Kalınlık, renk ve proje ölçüsüne göre fiyatlandırılır.');

INSERT INTO posts (title, slug, excerpt, content, published_at) VALUES
('Antalya Mermer Fiyatları', 'antalya-mermer-fiyatlari', 'Antalya bölgesinde mermer fiyatlarını etkileyen faktörler.', 'Mermer fiyatları taşın kalitesi, kalınlığı ve işçilik maliyetlerine göre değişir. Keşif sonrası net fiyatlandırma yapılır.', NOW()),
('Granit mi Çimstone mu', 'granit-mi-cimstone-mu', 'Granit ve çimstone arasındaki farklar.', 'Granit doğal dayanıklılığıyla öne çıkar. Çimstone ise renk çeşitliliği ve bakım kolaylığı sunar.', NOW()),
('Kuvars Tezgah Bakımı', 'kuvars-tezgah-bakimi', 'Kuvars tezgahlar için pratik bakım önerileri.', 'Günlük temizlikte yumuşak bez kullanın, aşındırıcı kimyasallardan kaçının.', NOW()),
('Mutfak Tezgahı Ölçüsü Nasıl Alınır', 'mutfak-tezgahi-olcusu-nasil-alinir', 'Doğru ölçü almanın püf noktaları.', 'Tezgah ölçüsü alınırken dolap derinliği, duvar hizası ve kesim alanları dikkate alınmalıdır.', NOW()),
('Mermer mi Granit mi', 'mermer-mi-granit-mi', 'Mermer ve granit kullanım alanları.', 'Mermer estetik görünümüyle öne çıkar, granit ise yoğun kullanım alanlarında tercih edilir.', NOW()),
('Çimstone Renkleri', 'cimstone-renkleri', 'En çok tercih edilen çimstone renkleri.', 'Beyaz, gri ve toprak tonları modern mutfaklarda tercih edilir.', NOW()),
('Banyo Tezgahı Taş Seçimi', 'banyo-tezgahi-tas-secimi', 'Banyo tezgahları için doğru taş seçimi.', 'Neme dayanıklı taşlar ve antibakteriyel yüzeyler tercih edilmelidir.', NOW()),
('Mermer Merdiven', 'mermer-merdiven', 'Mermer merdiven uygulamalarında dikkat edilecekler.', 'Kaymaz yüzey işlemleri ve doğru montaj güvenliği artırır.', NOW()),
('Dış Cephe Doğal Taş', 'dis-cephe-dogal-tas', 'Dış cephe kaplamalarında doğal taş kullanımı.', 'Doğal taş, estetik görünüm ve uzun ömür sağlar.', NOW()),
('Antalya’da Tezgah Montaj Süreci', 'antalya-tezgah-montaj-sureci', 'Montaj sürecinin adımları.', 'Keşif, ölçü alma, üretim ve montaj aşamalarıyla süreç tamamlanır.', NOW());
