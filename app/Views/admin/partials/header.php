<?php
$admin = $_SESSION['admin'] ?? null;
?>
<!doctype html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel | Emek Mermer Antalya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('admin') ?>">Admin Panel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="adminNav">
            <?php if ($admin) : ?>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('admin/sliders') ?>">Slider</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('admin/categories') ?>">Kategoriler</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('admin/products') ?>">Ürünler</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('admin/posts') ?>">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('admin/faqs') ?>">SSS</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('admin/leads') ?>">Mesajlar</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('admin/settings') ?>">Ayarlar</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('admin/logout') ?>">Çıkış</a></li>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</nav>
<main class="py-4">
