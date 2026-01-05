<?php
$settings = $settings ?? [];
$address = $settings['address'] ?? 'Antalya, Türkiye';
$phone = $settings['phone'] ?? '+90 000 000 0000';
$whatsapp = $settings['whatsapp'] ?? $phone;
$email = $settings['email'] ?? 'info@emekmermerantalya.com';
$mapUrl = 'https://www.google.com/maps/search/?api=1&query=' . urlencode($address);
$whatsappNumber = preg_replace('/\D+/', '', $whatsapp);
$whatsappLink = $whatsappNumber ? 'https://wa.me/' . $whatsappNumber : '#';
?>
</main>
<footer class="py-5 text-white">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6">
                <h5><?= htmlspecialchars($settings['site_name'] ?? 'Emek Mermer Antalya') ?></h5>
                <p class="mb-2">
                    <a class="text-white text-decoration-none" href="<?= htmlspecialchars($mapUrl) ?>" target="_blank" rel="noopener">
                        <?= htmlspecialchars($address) ?>
                    </a>
                </p>
                <p class="mb-0">Seçkin taş koleksiyonları ve özel projeler için bize ulaşın.</p>
            </div>
            <div class="col-md-6 text-md-end">
                <p class="mb-1">Telefon: <a class="text-white text-decoration-none" href="tel:<?= htmlspecialchars($phone) ?>"><?= htmlspecialchars($phone) ?></a></p>
                <p class="mb-1">WhatsApp: <a class="text-white text-decoration-none" href="<?= htmlspecialchars($whatsappLink) ?>" target="_blank" rel="noopener"><?= htmlspecialchars($whatsapp) ?></a></p>
                <p class="mb-1">E-posta: <a class="text-white text-decoration-none" href="mailto:<?= htmlspecialchars($email) ?>"><?= htmlspecialchars($email) ?></a></p>
                <p class="mb-0">VIP Keşif: Hafta içi 09:00 - 18:00</p>
            </div>
        </div>
        <div class="d-flex justify-content-between align-items-center mt-4">
            <small>Powered by <a class="text-white text-decoration-none" href="https://goremedya.com" target="_blank" rel="noopener">Göre Medya</a></small>
        </div>
    </div>
</footer>
<a class="whatsapp-float" href="<?= htmlspecialchars($whatsappLink) ?>" target="_blank" rel="noopener" aria-label="WhatsApp">
    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
        <path d="M3 21l1.6-4.2A8.5 8.5 0 1 1 20.5 12a8.5 8.5 0 0 1-12.9 7.3L3 21z"></path>
        <path d="M8.5 10.5c1.2 2.3 3.1 4.2 5.4 5.4l1.6-1a1 1 0 0 1 1.1 0l1.8 1a1 1 0 0 1 .4 1.2c-.4 1.2-1.7 2.2-3 2.2-1.7 0-4.8-1.1-7.2-3.5-2.4-2.4-3.5-5.5-3.5-7.2 0-1.3 1-2.6 2.2-3a1 1 0 0 1 1.2.4l1 1.8a1 1 0 0 1 0 1.1l-1 1.6z"></path>
    </svg>
</a>
<script>
const storedTheme = localStorage.getItem('theme') || 'light';\nif (storedTheme) {\n    document.documentElement.setAttribute('data-theme', storedTheme);\n    document.body.setAttribute('data-theme', storedTheme);\n}\n\ndocument.querySelectorAll('[data-theme-toggle]').forEach((btn) => {\n    btn.addEventListener('click', () => {\n        const current = document.documentElement.getAttribute('data-theme') === 'light' ? 'dark' : 'light';\n        document.documentElement.setAttribute('data-theme', current);\n        document.body.setAttribute('data-theme', current);\n        localStorage.setItem('theme', current);\n    });\n});\n</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
