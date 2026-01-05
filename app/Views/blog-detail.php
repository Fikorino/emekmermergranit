<?php require __DIR__ . '/partials/header.php'; ?>
<section class="py-5">
    <div class="container">
        <h1 class="mb-3"><?= htmlspecialchars($post['title']) ?></h1>
        <p class="text-muted"><?= htmlspecialchars(date('d.m.Y', strtotime($post['published_at']))) ?></p>
        <div class="lead mb-4"><?= nl2br(htmlspecialchars($post['excerpt'])) ?></div>
        <div><?= nl2br(htmlspecialchars($post['content'])) ?></div>
    </div>
</section>
<?php require __DIR__ . '/partials/footer.php'; ?>
