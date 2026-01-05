<?php require __DIR__ . '/partials/header.php'; ?>
<section class="section-light">
    <div class="container">
        <div class="section-heading">
            <span>İletişim</span>
            <h1>Projeleriniz için özel teklif alın</h1>
            <p>Antalya genelinde ücretsiz keşif, taş seçimi ve detaylı teklif süreci için bizimle iletişime geçin.</p>
        </div>
        <?php if ($success) : ?>
            <div class="alert alert-success">Mesajınız alınmıştır. En kısa sürede dönüş yapacağız.</div>
        <?php endif; ?>
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="premium-card h-100">
                    <form method="post" action="<?= base_url('iletisim') ?>">
                        <div class="mb-3">
                            <label class="form-label">Ad Soyad</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">E-posta</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Telefon</label>
                            <input type="text" name="phone" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mesaj</label>
                            <textarea name="message" class="form-control" rows="4" required></textarea>
                        </div>
                        <button class="btn btn-gold">Gönder</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="premium-card h-100">
                    <h5>İletişim Bilgileri</h5>
                    <p>Adres: <?= htmlspecialchars($settings['address'] ?? 'Antalya, Türkiye') ?></p>
                    <p>Telefon: <?= htmlspecialchars($settings['phone'] ?? '+90 000 000 0000') ?></p>
                    <p>E-posta: <?= htmlspecialchars($settings['email'] ?? 'info@emekmermerantalya.com') ?></p>
                    <hr>
                    <p>Showroom ziyaretleri ve numune incelemeleri için randevu oluşturabilirsiniz. VIP projeler için özel ekip planlaması yapılır.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require __DIR__ . '/partials/footer.php'; ?>
