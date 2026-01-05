<?php require __DIR__ . '/partials/header.php'; ?>
<section class="py-5">
    <div class="container">
        <h1 class="mb-2"><?= htmlspecialchars($category['name']) ?></h1>
        <p class="text-muted mb-4"><?= htmlspecialchars($category['description']) ?></p>
        <div class="row g-4">
            <?php foreach ($products as $product) : ?>
                <div class="col-md-4">
                    <div class="card h-100">
                        <img src="<?= asset($product['image_path'] ?: 'assets/placeholder.svg') ?>" class="card-img-top" alt="<?= htmlspecialchars($product['name']) ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($product['name']) ?></h5>
                            <a href="<?= base_url('urun/' . $product['slug']) ?>" class="btn btn-outline-primary">Detay</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php require __DIR__ . '/partials/footer.php'; ?>
