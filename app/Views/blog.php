<?php require __DIR__ . '/partials/header.php'; ?>
<section class="py-5">
    <div class="container">
        <h1 class="mb-4">Blog</h1>
        <div class="row g-4">
            <?php foreach ($posts as $post) : ?>
                <div class="col-md-6">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($post['title']) ?></h5>
                            <p class="card-text"><?= htmlspecialchars($post['excerpt']) ?></p>
                            <a href="<?= base_url('blog/' . $post['slug']) ?>" class="btn btn-outline-primary">Devamı</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php require __DIR__ . '/partials/footer.php'; ?>
