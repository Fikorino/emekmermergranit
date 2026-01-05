<?php require __DIR__ . '/partials/header.php'; ?>
<div class="container">
    <h1 class="mb-4">Genel Ayarlar</h1>
    <div class="card">
        <div class="card-body">
            <form method="post" action="<?= base_url('admin/settings') ?>">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Site Adı</label>
                        <input type="text" name="site_name" class="form-control" value="<?= htmlspecialchars($settings['site_name'] ?? '') ?>">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Telefon</label>
                        <input type="text" name="phone" class="form-control" value="<?= htmlspecialchars($settings['phone'] ?? '') ?>">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">E-posta</label>
                        <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($settings['email'] ?? '') ?>">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Adres</label>
                        <input type="text" name="address" class="form-control" value="<?= htmlspecialchars($settings['address'] ?? '') ?>">
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-primary">Kaydet</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require __DIR__ . '/partials/footer.php'; ?>
