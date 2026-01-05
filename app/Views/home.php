<?php require __DIR__ . '/partials/header.php'; ?>

<section class="hero-section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <span class="hero-eyebrow">Antalya'nın premium taş atölyesi</span>
                <h1 class="hero-title">Zamansız mermer, sofistike granit ve kusursuz işçilik.</h1>
                <p class="hero-lead">Emek Mermer Antalya; mutfak, banyo, otel ve villa projelerinde doğal taşın en rafine halini sunar. Keşiften montaja kadar her adımda butik bir çalışma disipliniyle ilerliyoruz.</p>
                <div class="d-flex flex-wrap gap-3">
                    <a class="btn btn-gold" href="<?= base_url('iletisim') ?>">Özel Teklif Alın</a>
                    <a class="btn btn-outline-light" href="<?= base_url('urunler') ?>">Koleksiyonları Keşfet</a>
                </div>
                <div class="hero-stats">
                    <div>
                        <strong>15+</strong>
                        <span>Yıllık uzmanlık</span>
                    </div>
                    <div>
                        <strong>420+</strong>
                        <span>Prestijli proje</span>
                    </div>
                    <div>
                        <strong>24/7</strong>
                        <span>Hızlı destek</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <?php if (!empty($sliders)) : ?>
                    <div id="homeCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <?php foreach ($sliders as $index => $slider) : ?>
                                <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                                    <img src="<?= asset($slider['image_path']) ?>" class="d-block w-100" alt="<?= htmlspecialchars($slider['title']) ?>">
                                    <div class="carousel-caption">
                                        <h5><?= htmlspecialchars($slider['title']) ?></h5>
                                        <p><?= htmlspecialchars($slider['subtitle']) ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php else : ?>
                    <div class="premium-card p-4">
                        <h4>Premium Koleksiyonlar</h4>
                        <p>Slider içeriklerini admin panelinden ekleyebilirsiniz. Her proje için özel taş ve renk alternatifleri hazırlıyoruz.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="section-luxe">
    <div class="container">
        <div class="section-heading">
            <span>Özel seçimler</span>
            <h2>Doğal taşın en rafine halini sunuyoruz</h2>
            <p>Her projeye özel blok seçimi, kesim planlaması ve yüzey uygulamasıyla mekânınızın karakterini yükseltiyoruz.</p>
        </div>
        <div class="row g-4">
            <?php foreach ($categories as $category) : ?>
                <div class="col-md-4">
                    <div class="premium-card h-100">
                        <h5><?= htmlspecialchars($category['name']) ?></h5>
                        <p><?= htmlspecialchars($category['description']) ?></p>
                        <a class="text-link" href="<?= base_url('urun-kategori/' . $category['slug']) ?>">Koleksiyonu Gör</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section-light">
    <div class="container">
        <div class="section-heading">
            <span>Öne çıkan ürünler</span>
            <h2>Özel üretim tezgah ve yüzey çözümleri</h2>
            <p>Yüksek dayanım, sofistike tasarım ve kusursuz montaj ile uzun yıllar ilk günkü gibi görünür.</p>
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

<section class="section-luxe">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <h3 class="mb-3">Butik üretim, yüksek kalite kontrol</h3>
                <p>Emek Mermer Antalya ekibi, ölçümden montaja kadar her adımı titizlikle yönetir. Taşın damar yapısı, ışık kırılımı ve mekânın mimari dili dikkate alınarak üretim yapılır. Böylece her proje kendine özel ve prestijli bir görünüme kavuşur.</p>
                <ul class="list-check">
                    <li>Proje bazlı taş seçimi ve numune sunumu</li>
                    <li>Milimetrik ölçüm ve yüksek hassasiyetli kesim</li>
                    <li>Montaj sonrası parlatma ve bakım önerileri</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="premium-card p-4">
                    <h5>VIP keşif ve teklif</h5>
                    <p>Antalya genelinde ücretsiz keşif, tasarım danışmanlığı ve hızlı teklif süreci ile çalışıyoruz. Lüks projeleriniz için özel ekip planlaması yapılır.</p>
                    <a class="btn btn-gold" href="<?= base_url('iletisim') ?>">Keşif Talep Et</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-light">
    <div class="container">
        <div class="section-heading">
            <span>Sık sorulan sorular</span>
            <h2>Merak edilen her konu için net cevaplar</h2>
            <p>Doğru taş seçimi, bakım ve fiyatlandırma hakkında en çok sorulan soruları burada topladık.</p>
        </div>
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
