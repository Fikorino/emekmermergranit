<?php require __DIR__ . '/partials/header.php'; ?>
<section class="section-light">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <img src="<?= asset($product['image_path'] ?: 'assets/placeholder.svg') ?>" class="img-fluid rounded-4 shadow" alt="<?= htmlspecialchars($product['name']) ?>">
            </div>
            <div class="col-lg-6">
                <span class="product-tag"><?= htmlspecialchars($product['category_name'] ?? 'Koleksiyon') ?></span>
                <h1><?= htmlspecialchars($product['name']) ?></h1>
                <p class="text-muted">Kategori: <?= htmlspecialchars($product['category_name'] ?? 'Genel') ?></p>
                <p><?= nl2br(htmlspecialchars($product['description'] ?? '')) ?></p>
                <ul class="list-check">
                    <li>Özel ölçü üretim ve montaj</li>
                    <li>Yüksek dayanım ve leke koruması</li>
                    <li>Uzman ekip ile zamanında teslim</li>
                </ul>
                <a class="btn btn-gold" href="<?= base_url('iletisim') ?>">Teklif Al</a>
            </div>
        </div>
    </div>
</section>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Product",
    "name": "<?= htmlspecialchars($product['name']) ?>",
    "category": "<?= htmlspecialchars($product['category_name'] ?? 'Mermer') ?>",
    "description": "<?= htmlspecialchars($product['description'] ?? '') ?>",
    "image": "<?= htmlspecialchars(asset($product['image_path'] ?: 'assets/placeholder.svg')) ?>"
}
</script>
<?php require __DIR__ . '/partials/footer.php'; ?>
