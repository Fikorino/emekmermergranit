<?php require __DIR__ . '/partials/header.php'; ?>
<div class="container">
    <h1 class="mb-4">Genel Ayarlar</h1>
    <div class="card">
        <div class="card-body">
            <form method="post" action="<?= base_url('admin/settings') ?>" enctype="multipart/form-data">
                <div class="row g-3">
                    <div class="col-md-12">
                        <label class="form-label">Logo (Açık Tema)</label>
                        <input type="file" name="logo_light" class="form-control" accept="image/*">
                        <?php if (!empty($settings['logo_light'])) : ?>
                            <div class="mt-2">
                                <img src="<?= asset($settings['logo_light']) ?>" alt="Logo açık" height="48">
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">Logo (Koyu Tema)</label>
                        <input type="file" name="logo_dark" class="form-control" accept="image/*">
                        <?php if (!empty($settings['logo_dark'])) : ?>
                            <div class="mt-2">
                                <img src="<?= asset($settings['logo_dark']) ?>" alt="Logo koyu" height="48">
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">Favicon</label>
                        <input type="file" name="favicon" class="form-control" accept="image/*">
                        <?php if (!empty($settings['favicon'])) : ?>
                            <div class="mt-2">
                                <img src="<?= asset($settings['favicon']) ?>" alt="Favicon" height="32">
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Site Adı</label>
                        <input type="text" name="site_name" class="form-control" value="<?= htmlspecialchars($settings['site_name'] ?? '') ?>">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Telefon</label>
                        <input type="text" name="phone" class="form-control" value="<?= htmlspecialchars($settings['phone'] ?? '') ?>">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">WhatsApp</label>
                        <input type="text" name="whatsapp" class="form-control" value="<?= htmlspecialchars($settings['whatsapp'] ?? '') ?>">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">E-posta</label>
                        <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($settings['email'] ?? '') ?>">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Adres</label>
                        <input type="text" name="address" class="form-control" value="<?= htmlspecialchars($settings['address'] ?? '') ?>">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Google Analytics Ölçüm ID</label>
                        <input type="text" name="ga_measurement_id" class="form-control" value="<?= htmlspecialchars($settings['ga_measurement_id'] ?? '') ?>">
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">Ads Özet Notu</label>
                        <textarea name="ads_summary" class="form-control" rows="3"><?= htmlspecialchars($settings['ads_summary'] ?? '') ?></textarea>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">Göre Medya Logo</label>
                        <input type="file" name="goremedya_logo" class="form-control" accept="image/*">
                        <?php if (!empty($settings['goremedya_logo'])) : ?>
                            <div class="mt-2">
                                <img src="<?= asset($settings['goremedya_logo']) ?>" alt="Göre Medya" height="32">
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-primary">Kaydet</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require __DIR__ . '/partials/footer.php'; ?>
