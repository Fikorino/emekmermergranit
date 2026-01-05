<?php require __DIR__ . '/partials/header.php'; ?>
<div class="container">
    <h1 class="mb-4">Slider Yönetimi</h1>
    <div class="card mb-4">
        <div class="card-body">
            <form method="post" action="<?= base_url('admin/sliders') ?>" enctype="multipart/form-data">
                <div class="row g-3">
                    <div class="col-md-4">
                        <label class="form-label">Başlık</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Alt Başlık</label>
                        <input type="text" name="subtitle" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Sıra</label>
                        <input type="number" name="sort_order" class="form-control" value="0">
                    </div>
                    <div class="col-md-2 d-flex align-items-end">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="is_active" checked>
                            <label class="form-check-label">Aktif</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Görsel</label>
                        <input type="file" name="image" class="form-control" accept="image/*" required>
                        <small class="text-muted">JPG, PNG, WEBP (max 5MB)</small>
                    </div>
                    <div class="col-md-6 d-flex align-items-end">
                        <button class="btn btn-primary">Kaydet</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h5>Mevcut Sliderlar</h5>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Görsel</th>
                            <th>Başlık</th>
                            <th>Sıra</th>
                            <th>İşlem</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($sliders as $slider) : ?>
                            <tr>
                                <td><img src="<?= asset($slider['image_path']) ?>" width="120" alt=""></td>
                                <td><?= htmlspecialchars($slider['title']) ?></td>
                                <td><?= htmlspecialchars((string)$slider['sort_order']) ?></td>
                                <td>
                                    <form method="post" action="<?= base_url('admin/sliders/delete/' . $slider['id']) ?>" onsubmit="return confirm('Silinsin mi?')">
                                        <button class="btn btn-sm btn-danger">Sil</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php require __DIR__ . '/partials/footer.php'; ?>
