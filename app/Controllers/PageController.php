<?php

declare(strict_types=1);

class PageController
{
    private function settings(): array
    {
        return Setting::all();
    }

    public function home(): void
    {
        $sliders = Slider::all();
        $categories = Category::all();
        $products = array_slice(Product::all(), 0, 6);
        $faqs = array_slice(Faq::all(), 0, 6);
        $meta = [
            'title' => 'Emek Mermer Antalya | Kaliteli Mermer ve Granit Çözümleri',
            'description' => 'Antalya’da mermer, granit, çimstone ve kuvars tezgah çözümleri. Profesyonel ölçü, üretim ve montaj.',
        ];
        view('home', [
            'sliders' => $sliders,
            'categories' => $categories,
            'products' => $products,
            'faqs' => $faqs,
            'meta' => $meta,
            'settings' => $this->settings(),
        ]);
    }

    public function hizmetler(): void
    {
        $meta = [
            'title' => 'Hizmetlerimiz | Emek Mermer Antalya',
            'description' => 'Mutfak ve banyo tezgahı, merdiven, dış cephe kaplama ve özel ölçü mermer işleri.',
        ];
        view('hizmetler', ['meta' => $meta, 'settings' => $this->settings()]);
    }

    public function hakkimizda(): void
    {
        $meta = [
            'title' => 'Hakkımızda | Emek Mermer Antalya',
            'description' => 'Emek Mermer Antalya, kaliteli taş işçiliği ve müşteri memnuniyeti ile hizmet verir.',
        ];
        view('hakkimizda', ['meta' => $meta, 'settings' => $this->settings()]);
    }

    public function iletisim(): void
    {
        $meta = [
            'title' => 'İletişim | Emek Mermer Antalya',
            'description' => 'Teklif almak için iletişime geçin. Hızlı dönüş ve keşif hizmeti.',
        ];
        $success = $_GET['success'] ?? null;
        view('iletisim', ['meta' => $meta, 'settings' => $this->settings(), 'success' => $success]);
    }

    public function iletisimPost(): void
    {
        $data = [
            'name' => trim($_POST['name'] ?? ''),
            'email' => trim($_POST['email'] ?? ''),
            'phone' => trim($_POST['phone'] ?? ''),
            'message' => trim($_POST['message'] ?? ''),
        ];

        Lead::create($data);
        redirect('iletisim?success=1');
    }
}
