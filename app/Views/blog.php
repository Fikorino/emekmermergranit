<?php require __DIR__ . '/partials/header.php'; ?>
<section class="section-light">
    <div class="container">
        <div class="section-heading">
            <span>Blog</span>
            <h1>Doğal taş dünyasından ilham</h1>
            <p>Mermer, granit ve kuvars hakkında bakım ipuçları, trendler ve proje önerileri.</p>
        </div>
        <div class="row g-4">
            <?php foreach ($posts as $post) : ?>
                <div class="col-md-6">
                    <div class="premium-card h-100">
                        <h5 class="card-title"><?= htmlspecialchars($post['title']) ?></h5>
                        <p class="card-text"><?= htmlspecialchars($post['excerpt']) ?></p>
                        <a href="<?= base_url('blog/' . $post['slug']) ?>" class="text-link">Devamını Oku</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php require __DIR__ . '/partials/footer.php'; ?>
