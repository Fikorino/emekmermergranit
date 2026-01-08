<?php require __DIR__ . '/partials/header.php'; ?>
<section class="section-light">
    <div class="container">
        <div class="section-heading">
            <span>Blog</span>
            <h1><?= htmlspecialchars($post['title']) ?></h1>
            <p class="text-muted"><?= htmlspecialchars(date('d.m.Y', strtotime($post['published_at']))) ?></p>
        </div>
        <div class="premium-card">
            <div class="lead mb-4"><?= nl2br(htmlspecialchars($post['excerpt'])) ?></div>
            <div><?= nl2br(htmlspecialchars($post['content'])) ?></div>
        </div>
    </div>
</section>
<?php require __DIR__ . '/partials/footer.php'; ?>
