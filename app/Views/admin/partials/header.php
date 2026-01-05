<?php
$admin = $_SESSION['admin'] ?? null;
$settings = $settings ?? Setting::all();
$goremedyaLogo = $settings['goremedya_logo'] ?? 'assets/goremedya.svg';
?>
<!doctype html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel | Emek Mermer Antalya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= asset('assets/admin.css') ?>">
    <script>
        (function() {
            var storedTheme = localStorage.getItem('theme') || 'light';
            document.documentElement.setAttribute('data-theme', storedTheme);
        })();
    </script>
</head>
<body class="bg-light">
<div class="admin-layout">
    <aside class="admin-sidebar">
        <div class="admin-brand">
            <a href="<?= base_url('admin') ?>">Emek Mermer</a>
            <span>Yönetim Paneli</span>
        </div>
        <?php if ($admin) : ?>
            <nav class="admin-menu">
                <a href="<?= base_url('admin') ?>">Genel Bakış</a>
                <a href="<?= base_url('admin/sliders') ?>">Slider</a>
                <a href="<?= base_url('admin/categories') ?>">Kategoriler</a>
                <a href="<?= base_url('admin/products') ?>">Ürünler</a>
                <a href="<?= base_url('admin/posts') ?>">Blog</a>
                <a href="<?= base_url('admin/faqs') ?>">SSS</a>
                <a href="<?= base_url('admin/leads') ?>">Mesajlar</a>
                <a href="<?= base_url('admin/settings') ?>">Ayarlar</a>
                <a href="<?= base_url('admin/logout') ?>">Çıkış</a>
            </nav>
            <div class="admin-powered">
                <span>Powered by</span>
                <a href="https://goremedya.com" target="_blank" rel="noopener">
                    <img src="<?= asset($goremedyaLogo) ?>" alt="Göre Medya" height="26">
                </a>
            </div>
        <?php endif; ?>
    </aside>
    <div class="admin-content">
        <header class="admin-topbar">
            <div>
                <h6 class="mb-0">Hoş geldiniz, <?= htmlspecialchars($admin['name'] ?? 'Admin') ?></h6>
                <small>Yönetim işlemlerini sol menüden yönetin.</small>
            </div>
            <div class="admin-user">
                <span><?= htmlspecialchars($admin['email'] ?? '') ?></span>
            </div>
            <button class="btn btn-sm btn-theme-toggle" type="button" data-theme-toggle aria-label="Tema değiştir">🌓</button>
        </header>
        <main class="py-4">
