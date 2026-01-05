<?php require __DIR__ . '/partials/header.php'; ?>

<section class="bg-light py-4">
    <div class="container">
        <?php if (!empty($sliders)) : ?>
            <div id="homeCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php foreach ($sliders as $index => $slider) : ?>
                        <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                            <img src="<?= asset($slider['image_path']) ?>" class="d-block w-100" alt="<?= htmlspecialchars($slider['title']) ?>">
                            <div class="carousel-caption d-none d-md-block">
                                <h5><?= htmlspecialchars($slider['title']) ?></h5>
                                <p><?= htmlspecialchars($slider['subtitle']) ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        <?php else : ?>
            <div class="alert alert-info">Slider içerikleri admin panelinden eklenebilir.</div>
        <?php endif; ?>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row align-items-center mb-4">
            <div class="col-md-6">
                <h2>Mermer & Granit Çözümleri</h2>
                <p>Emek Mermer Antalya, özel ölçü ve projeye uygun mermer, granit, kuvars ve çimstone uygulamalarında yanınızda.</p>
            </div>
            <div class="col-md-6 text-md-end">
                <a class="btn btn-primary" href="<?= base_url('iletisim') ?>">Ücretsiz Keşif Alın</a>
            </div>
        </div>
        <div class="row g-4">
            <?php foreach ($categories as $category) : ?>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($category['name']) ?></h5>
                            <p class="card-text"><?= htmlspecialchars($category['description']) ?></p>
                            <a href="<?= base_url('urun-kategori/' . $category['slug']) ?>" class="btn btn-outline-primary">Ürünleri Gör</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="bg-light py-5">
    <div class="container">
        <h3 class="mb-4">Öne Çıkan Ürünler</h3>
        <div class="row g-4">
            <?php foreach ($products as $product) : ?>
                <div class="col-md-4">
                    <div class="card h-100">
                        <img src="<?= asset($product['image_path'] ?: 'assets/placeholder.svg') ?>" class="card-img-top" alt="<?= htmlspecialchars($product['name']) ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($product['name']) ?></h5>
                            <p class="card-text"><?= htmlspecialchars(mb_substr($product['description'] ?? '', 0, 120)) ?>...</p>
                            <a href="<?= base_url('urun/' . $product['slug']) ?>" class="btn btn-outline-primary">Detay</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <h3 class="mb-4">Sık Sorulan Sorular</h3>
        <div class="accordion" id="faqAccordion">
            <?php foreach ($faqs as $index => $faq) : ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading<?= $index ?>">
                        <button class="accordion-button <?= $index === 0 ? '' : 'collapsed' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $index ?>">
                            <?= htmlspecialchars($faq['question']) ?>
                        </button>
                    </h2>
                    <div id="collapse<?= $index ?>" class="accordion-collapse collapse <?= $index === 0 ? 'show' : '' ?>" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <?= nl2br(htmlspecialchars($faq['answer'])) ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php if (!empty($faqs)) : ?>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        <?php foreach ($faqs as $index => $faq) : ?>
        {
            "@type": "Question",
            "name": "<?= htmlspecialchars($faq['question']) ?>",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "<?= htmlspecialchars($faq['answer']) ?>"
            }
        }<?= $index < count($faqs) - 1 ? ',' : '' ?>
        <?php endforeach; ?>
    ]
}
</script>
<?php endif; ?>

<?php require __DIR__ . '/partials/footer.php'; ?>
