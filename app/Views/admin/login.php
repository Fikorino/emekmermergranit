<!doctype html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Giriş</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= asset('assets/admin.css') ?>">
    <script>
        (function() {
            var storedTheme = localStorage.getItem('theme') || 'dark';
            document.documentElement.setAttribute('data-theme', storedTheme);
        })();
    </script>
</head>
<body class="bg-light">
<div class="container py-5">
    <div class="d-flex justify-content-end mb-3">
        <button class="btn btn-sm btn-theme-toggle" type="button" data-theme-toggle aria-label="Tema değiştir">🌓</button>
    </div>
    <div class="row g-4 align-items-start">
        <div class="col-lg-5">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h4 class="mb-4">Admin Giriş</h4>
                    <?php if (!empty($error)) : ?>
                        <div class="alert alert-danger">E-posta veya şifre hatalı.</div>
                    <?php endif; ?>
                    <form method="post" action="<?= base_url('admin/login') ?>">
                        <div class="mb-3">
                            <label class="form-label">E-posta</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Şifre</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <button class="btn btn-primary w-100">Giriş Yap</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="row g-3">
                <div class="col-md-6">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <h6>Analytics Özet</h6>
                            <p class="mb-1">Aylık ziyaret: 18.400</p>
                            <p class="mb-1">Form dönüşüm: %4.6</p>
                            <small class="text-muted">Google Analytics bağlantısı hazır.</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <h6>Reklam Performansı</h6>
                            <p class="mb-1">Tahmini bütçe: 24.000 ₺</p>
                            <p class="mb-1">ROI hedefi: %180</p>
                            <small class="text-muted">Ads özet alanı hazır.</small>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h6>Öncelikli görevler</h6>
                            <ul class="mb-0">
                                <li>Slider görsellerini güncelleyin.</li>
                                <li>Yeni ürün ve blog içeriklerini ekleyin.</li>
                                <li>Analitik ve reklam özetlerini ayarlardan girin.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
const storedTheme = localStorage.getItem('theme') || 'dark';\nif (storedTheme) {\n    document.documentElement.setAttribute('data-theme', storedTheme);\n}\n\ndocument.querySelectorAll('[data-theme-toggle]').forEach((btn) => {\n    btn.addEventListener('click', () => {\n        const current = document.documentElement.getAttribute('data-theme') === 'light' ? 'dark' : 'light';\n        document.documentElement.setAttribute('data-theme', current);\n        localStorage.setItem('theme', current);\n    });\n});\n</script>
</body>
</html>
