<?php require __DIR__ . '/partials/header.php'; ?>
<section class="section-light">
    <div class="container">
        <div class="section-heading">
            <span>Ürünler</span>
            <h1>Emek Mermer koleksiyonları</h1>
            <p>Granit, mermer ve kuvars yüzeylerde prestijli tasarımlar sunuyoruz. Her ürün, yüksek kalite kontrol sürecinden geçirilir.</p>
        </div>
        <div class="row g-4">
            <?php foreach ($products as $product) : ?>
                <div class="col-md-4">
                    <div class="card premium-product h-100">
                        <img src="<?= asset($product['image_path'] ?: 'assets/placeholder.svg') ?>" class="card-img-top" alt="<?= htmlspecialchars($product['name']) ?>">
                        <div class="card-body">
                            <span class="product-tag"><?= htmlspecialchars($product['category_name'] ?? 'Koleksiyon') ?></span>
                            <h5 class="card-title"><?= htmlspecialchars($product['name']) ?></h5>
                            <p class="card-text"><?= htmlspecialchars(mb_substr($product['description'] ?? '', 0, 120)) ?>...</p>
                            <a href="<?= base_url('urun/' . $product['slug']) ?>" class="btn btn-outline-dark">Detay</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php require __DIR__ . '/partials/footer.php'; ?>
