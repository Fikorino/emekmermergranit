<?php

declare(strict_types=1);

$router->get('/', [new PageController(), 'home']);
$router->get('/urunler', [new ProductController(), 'index']);
$router->get('/urun-kategori/{slug}', [new ProductController(), 'category']);
$router->get('/urun/{slug}', [new ProductController(), 'show']);
$router->get('/hizmetler', [new PageController(), 'hizmetler']);
$router->get('/blog', [new BlogController(), 'index']);
$router->get('/blog/{slug}', [new BlogController(), 'show']);
$router->get('/hakkimizda', [new PageController(), 'hakkimizda']);
$router->get('/iletisim', [new PageController(), 'iletisim']);
$router->post('/iletisim', [new PageController(), 'iletisimPost']);

$router->get('/admin', [new AdminController(), 'dashboard']);
$router->get('/admin/login', [new AdminController(), 'loginForm']);
$router->post('/admin/login', [new AdminController(), 'login']);
$router->get('/admin/logout', [new AdminController(), 'logout']);

$router->get('/admin/sliders', [new AdminController(), 'sliders']);
$router->post('/admin/sliders', [new AdminController(), 'slidersStore']);
$router->post('/admin/sliders/delete/{id}', [new AdminController(), 'slidersDelete']);

$router->get('/admin/categories', [new AdminController(), 'categories']);
$router->post('/admin/categories', [new AdminController(), 'categoriesStore']);
$router->post('/admin/categories/delete/{id}', [new AdminController(), 'categoriesDelete']);

$router->get('/admin/products', [new AdminController(), 'products']);
$router->post('/admin/products', [new AdminController(), 'productsStore']);
$router->post('/admin/products/delete/{id}', [new AdminController(), 'productsDelete']);

$router->get('/admin/posts', [new AdminController(), 'posts']);
$router->post('/admin/posts', [new AdminController(), 'postsStore']);
$router->post('/admin/posts/delete/{id}', [new AdminController(), 'postsDelete']);

$router->get('/admin/faqs', [new AdminController(), 'faqs']);
$router->post('/admin/faqs', [new AdminController(), 'faqsStore']);
$router->post('/admin/faqs/delete/{id}', [new AdminController(), 'faqsDelete']);

$router->get('/admin/leads', [new AdminController(), 'leads']);

$router->get('/admin/settings', [new AdminController(), 'settings']);
$router->post('/admin/settings', [new AdminController(), 'settingsStore']);
