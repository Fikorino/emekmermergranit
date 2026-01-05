<?php require __DIR__ . '/partials/header.php'; ?>
<div class="container">
    <h1 class="mb-4">İletişim Mesajları</h1>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Ad Soyad</th>
                            <th>E-posta</th>
                            <th>Telefon</th>
                            <th>Mesaj</th>
                            <th>Tarih</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($leads as $lead) : ?>
                            <tr>
                                <td><?= htmlspecialchars($lead['name']) ?></td>
                                <td><?= htmlspecialchars($lead['email']) ?></td>
                                <td><?= htmlspecialchars($lead['phone']) ?></td>
                                <td><?= htmlspecialchars($lead['message']) ?></td>
                                <td><?= htmlspecialchars(date('d.m.Y H:i', strtotime($lead['created_at']))) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php require __DIR__ . '/partials/footer.php'; ?>
