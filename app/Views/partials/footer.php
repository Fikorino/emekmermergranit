<?php
$settings = $settings ?? [];
?>
</main>
<footer class="py-5 text-white">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6">
                <h5><?= htmlspecialchars($settings['site_name'] ?? 'Emek Mermer Antalya') ?></h5>
                <p class="mb-2"><?= htmlspecialchars($settings['address'] ?? 'Antalya, Türkiye') ?></p>
                <p class="mb-0">Seçkin taş koleksiyonları ve özel projeler için bize ulaşın.</p>
            </div>
            <div class="col-md-6 text-md-end">
                <p class="mb-1">Telefon: <?= htmlspecialchars($settings['phone'] ?? '+90 000 000 0000') ?></p>
                <p class="mb-1">E-posta: <?= htmlspecialchars($settings['email'] ?? 'info@emekmermerantalya.com') ?></p>
                <p class="mb-0">VIP Keşif: Hafta içi 09:00 - 18:00</p>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
