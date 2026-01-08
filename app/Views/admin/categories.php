<?php require __DIR__ . '/partials/header.php'; ?>
<div class="container">
    <h1 class="mb-4">Kategori Yönetimi</h1>
    <div class="card mb-4">
        <div class="card-body">
            <form method="post" action="<?= base_url('admin/categories') ?>">
                <div class="row g-3">
                    <div class="col-md-4">
                        <label class="form-label">Kategori Adı</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Slug</label>
                        <input type="text" name="slug" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Açıklama</label>
                        <input type="text" name="description" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-primary">Kaydet</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h5>Mevcut Kategoriler</h5>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Ad</th>
                            <th>Slug</th>
                            <th>İşlem</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($categories as $category) : ?>
                            <tr>
                                <td><?= htmlspecialchars($category['name']) ?></td>
                                <td><?= htmlspecialchars($category['slug']) ?></td>
                                <td>
                                    <form method="post" action="<?= base_url('admin/categories/delete/' . $category['id']) ?>" onsubmit="return confirm('Silinsin mi?')">
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
