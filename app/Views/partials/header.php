<?php
$metaTitle = $meta['title'] ?? 'Emek Mermer Antalya';
$metaDescription = $meta['description'] ?? 'Antalya mermer ve granit çözümleri.';
$canonical = $meta['canonical'] ?? base_url(trim($_SERVER['REQUEST_URI'], '/'));
$settings = $settings ?? [];
$siteName = $settings['site_name'] ?? 'Emek Mermer Antalya';
$phone = $settings['phone'] ?? '+90 000 000 0000';
$address = $settings['address'] ?? 'Antalya, Türkiye';
?>
<!doctype html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($metaTitle) ?></title>
    <meta name="description" content="<?= htmlspecialchars($metaDescription) ?>">
    <link rel="canonical" href="<?= htmlspecialchars($canonical) ?>">
    <meta property="og:title" content="<?= htmlspecialchars($metaTitle) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($metaDescription) ?>">
    <meta property="og:url" content="<?= htmlspecialchars($canonical) ?>">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?= htmlspecialchars($siteName) ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= asset('assets/style.css') ?>">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('') ?>"><?= htmlspecialchars($siteName) ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="<?= base_url('') ?>">Ana Sayfa</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('urunler') ?>">Ürünler</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('hizmetler') ?>">Hizmetler</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('blog') ?>">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('hakkimizda') ?>">Hakkımızda</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('iletisim') ?>">İletişim</a></li>
            </ul>
        </div>
    </div>
</nav>
<main>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "<?= htmlspecialchars($siteName) ?>",
    "address": "<?= htmlspecialchars($address) ?>",
    "telephone": "<?= htmlspecialchars($phone) ?>",
    "url": "<?= htmlspecialchars(base_url('')) ?>"
}
</script>
