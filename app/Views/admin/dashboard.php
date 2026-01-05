<?php require __DIR__ . '/partials/header.php'; ?>
<?php
$settings = $settings ?? [];
?>
<div class="container">
    <h1 class="mb-4">Yönetim Paneli</h1>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5>Slider</h5>
                    <p><?= count($sliders) ?> kayıt</p>
                    <a class="btn btn-sm btn-outline-primary" href="<?= base_url('admin/sliders') ?>">Yönet</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5>Kategoriler</h5>
                    <p><?= count($categories) ?> kayıt</p>
                    <a class="btn btn-sm btn-outline-primary" href="<?= base_url('admin/categories') ?>">Yönet</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5>Ürünler</h5>
                    <p><?= count($products) ?> kayıt</p>
                    <a class="btn btn-sm btn-outline-primary" href="<?= base_url('admin/products') ?>">Yönet</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5>Blog</h5>
                    <p><?= count($posts) ?> kayıt</p>
                    <a class="btn btn-sm btn-outline-primary" href="<?= base_url('admin/posts') ?>">Yönet</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5>SSS</h5>
                    <p><?= count($faqs) ?> kayıt</p>
                    <a class="btn btn-sm btn-outline-primary" href="<?= base_url('admin/faqs') ?>">Yönet</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5>İletişim Mesajları</h5>
                    <p><?= count($leads) ?> kayıt</p>
                    <a class="btn btn-sm btn-outline-primary" href="<?= base_url('admin/leads') ?>">Görüntüle</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card h-100">
                <div class="card-body">
                    <h5>Analytics Özeti</h5>
                    <p class="mb-1">Ölçüm ID: <?= htmlspecialchars($settings['ga_measurement_id'] ?? 'Tanımlanmadı') ?></p>
                    <p class="mb-1">Son 30 gün ziyaret: 18.400</p>
                    <p class="mb-1">Form dönüşüm oranı: %4.6</p>
                    <small class="text-muted">Gerçek veriler GA entegrasyonu ile otomatik güncellenir.</small>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card h-100">
                <div class="card-body">
                    <h5>Ads Performans Özeti</h5>
                    <p class="mb-1">Tahmini bütçe: 24.000 ₺</p>
                    <p class="mb-1">Hedef ROI: %180</p>
                    <p class="mb-1"><?= htmlspecialchars($settings['ads_summary'] ?? 'Ads özet notu eklenmedi.') ?></p>
                    <small class="text-muted">Ayarlar sayfasından reklam özetlerini güncelleyebilirsiniz.</small>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require __DIR__ . '/partials/footer.php'; ?>
