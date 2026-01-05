<?php require __DIR__ . '/partials/header.php'; ?>
<section class="py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6">
                <img src="<?= asset($product['image_path'] ?: 'assets/placeholder.svg') ?>" class="img-fluid" alt="<?= htmlspecialchars($product['name']) ?>">
            </div>
            <div class="col-md-6">
                <h1><?= htmlspecialchars($product['name']) ?></h1>
                <p class="text-muted">Kategori: <?= htmlspecialchars($product['category_name'] ?? 'Genel') ?></p>
                <p><?= nl2br(htmlspecialchars($product['description'] ?? '')) ?></p>
                <a class="btn btn-primary" href="<?= base_url('iletisim') ?>">Teklif Al</a>
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
