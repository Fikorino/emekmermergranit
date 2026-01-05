<?php require __DIR__ . '/partials/header.php'; ?>
<div class="container">
    <h1 class="mb-4">Blog Yönetimi</h1>
    <div class="card mb-4">
        <div class="card-body">
            <form method="post" action="<?= base_url('admin/posts') ?>">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Başlık</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Slug</label>
                        <input type="text" name="slug" class="form-control" required>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">Özet</label>
                        <textarea name="excerpt" class="form-control" rows="2"></textarea>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">İçerik</label>
                        <textarea name="content" class="form-control" rows="4"></textarea>
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
            <h5>Mevcut Yazılar</h5>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Başlık</th>
                            <th>Tarih</th>
                            <th>İşlem</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($posts as $post) : ?>
                            <tr>
                                <td><?= htmlspecialchars($post['title']) ?></td>
                                <td><?= htmlspecialchars(date('d.m.Y', strtotime($post['published_at']))) ?></td>
                                <td>
                                    <form method="post" action="<?= base_url('admin/posts/delete/' . $post['id']) ?>" onsubmit="return confirm('Silinsin mi?')">
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
