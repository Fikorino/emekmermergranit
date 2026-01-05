<?php

declare(strict_types=1);

class ProductController
{
    private function settings(): array
    {
        return Setting::all();
    }

    public function index(): void
    {
        $products = Product::all();
        $meta = [
            'title' => 'Ürünler | Emek Mermer Antalya',
            'description' => 'Mermer, granit, çimstone ve kuvars ürün seçenekleri.',
        ];
        view('urunler', ['products' => $products, 'meta' => $meta, 'settings' => $this->settings()]);
    }

    public function category(string $slug): void
    {
        $category = Category::findBySlug($slug);
        if (!$category) {
            http_response_code(404);
            view('404');
            return;
        }
        $products = Product::byCategorySlug($slug);
        $meta = [
            'title' => $category['name'] . ' | Emek Mermer Antalya',
            'description' => $category['description'] ?: 'Kategori ürünleri',
        ];
        view('urun-kategori', [
            'category' => $category,
            'products' => $products,
            'meta' => $meta,
            'settings' => $this->settings(),
        ]);
    }

    public function show(string $slug): void
    {
        $product = Product::findBySlug($slug);
        if (!$product) {
            http_response_code(404);
            view('404');
            return;
        }
        $meta = [
            'title' => $product['name'] . ' | Emek Mermer Antalya',
            'description' => mb_substr(strip_tags($product['description'] ?? ''), 0, 150),
        ];
        view('urun', ['product' => $product, 'meta' => $meta, 'settings' => $this->settings()]);
    }
}
