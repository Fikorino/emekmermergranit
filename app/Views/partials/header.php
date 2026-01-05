<?php
$metaTitle = $meta['title'] ?? 'Emek Mermer Antalya';
$metaDescription = $meta['description'] ?? 'Antalya mermer ve granit çözümleri.';
$canonical = $meta['canonical'] ?? base_url(ltrim(CURRENT_PATH, '/'));
$settings = $settings ?? [];
$siteName = $settings['site_name'] ?? 'Emek Mermer Antalya';
$phone = $settings['phone'] ?? '+90 000 000 0000';
$whatsapp = $settings['whatsapp'] ?? $phone;
$address = $settings['address'] ?? 'Antalya, Türkiye';
$logoLight = $settings['logo_light'] ?? '';
$logoDark = $settings['logo_dark'] ?? '';
if ($logoLight === '' && $logoDark !== '') {
    $logoLight = $logoDark;
}
if ($logoDark === '' && $logoLight !== '') {
    $logoDark = $logoLight;
}
$favicon = $settings['favicon'] ?? 'assets/favicon.svg';
$mapUrl = 'https://www.google.com/maps/search/?api=1&query=' . urlencode($address);
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
    <link rel="icon" href="<?= asset($favicon) ?>" type="image/svg+xml">
    <script>
        (function() {
            var storedTheme = localStorage.getItem('theme') || 'light';
            document.documentElement.setAttribute('data-theme', storedTheme);
        })();
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= asset('assets/style.css') ?>">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark premium-nav">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-2" href="<?= base_url('') ?>">
            <?php if ($logoLight || $logoDark) : ?>
                <img class="logo logo-light" src="<?= asset($logoLight) ?>" alt="Logo açık" height="40">
                <img class="logo logo-dark" src="<?= asset($logoDark) ?>" alt="Logo koyu" height="40">
            <?php else : ?>
                <span class="logo-mark logo-fallback">EM</span>
            <?php endif; ?>
        </a>
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
            <div class="ms-lg-4">
                <a class="btn btn-outline-light btn-sm premium-btn" href="<?= base_url('iletisim') ?>">Teklif Al</a>
            </div>
            <button class="btn btn-sm btn-theme-toggle ms-lg-3" type="button" data-theme-toggle aria-label="Tema değiştir">🌓</button>
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
