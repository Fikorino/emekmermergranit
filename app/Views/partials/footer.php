<?php
$settings = $settings ?? [];
?>
</main>
<footer class="bg-dark text-white py-4 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5><?= htmlspecialchars($settings['site_name'] ?? 'Emek Mermer Antalya') ?></h5>
                <p class="mb-0"><?= htmlspecialchars($settings['address'] ?? 'Antalya, Türkiye') ?></p>
            </div>
            <div class="col-md-6 text-md-end">
                <p class="mb-0">Telefon: <?= htmlspecialchars($settings['phone'] ?? '+90 000 000 0000') ?></p>
                <p class="mb-0">E-posta: <?= htmlspecialchars($settings['email'] ?? 'info@emekmermerantalya.com') ?></p>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
