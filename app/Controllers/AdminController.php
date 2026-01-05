<?php

declare(strict_types=1);

class AdminController
{
    private function requireAuth(): void
    {
        if (empty($_SESSION['admin'])) {
            redirect('admin/login');
        }
    }

    public function loginForm(): void
    {
        view('admin/login', ['error' => $_GET['error'] ?? null]);
    }

    public function login(): void
    {
        $email = trim($_POST['email'] ?? '');
        $password = $_POST['password'] ?? '';

        $user = User::findByEmail($email);
        if (!$user || !password_verify($password, $user['password_hash'])) {
            redirect('admin/login?error=1');
        }

        $_SESSION['admin'] = [
            'id' => $user['id'],
            'name' => $user['name'],
            'email' => $user['email'],
        ];
        redirect('admin');
    }

    public function logout(): void
    {
        unset($_SESSION['admin']);
        redirect('admin/login');
    }

    public function dashboard(): void
    {
        $this->requireAuth();
        view('admin/dashboard', [
            'sliders' => Slider::all(),
            'categories' => Category::all(),
            'products' => Product::all(),
            'posts' => Post::all(),
            'faqs' => Faq::all(),
            'leads' => Lead::all(),
            'settings' => Setting::all(),
        ]);
    }

    public function sliders(): void
    {
        $this->requireAuth();
        view('admin/sliders', ['sliders' => Slider::all()]);
    }

    public function slidersStore(): void
    {
        $this->requireAuth();
        $upload = $this->handleUpload('image');
        Slider::create([
            'title' => trim($_POST['title'] ?? ''),
            'subtitle' => trim($_POST['subtitle'] ?? ''),
            'image_path' => $upload,
            'sort_order' => (int)($_POST['sort_order'] ?? 0),
            'is_active' => isset($_POST['is_active']) ? 1 : 0,
        ]);
        redirect('admin/sliders');
    }

    public function slidersDelete(string $id): void
    {
        $this->requireAuth();
        Slider::delete((int)$id);
        redirect('admin/sliders');
    }

    public function categories(): void
    {
        $this->requireAuth();
        view('admin/categories', ['categories' => Category::all()]);
    }

    public function categoriesStore(): void
    {
        $this->requireAuth();
        Category::create([
            'name' => trim($_POST['name'] ?? ''),
            'slug' => trim($_POST['slug'] ?? ''),
            'description' => trim($_POST['description'] ?? ''),
        ]);
        redirect('admin/categories');
    }

    public function categoriesDelete(string $id): void
    {
        $this->requireAuth();
        Category::delete((int)$id);
        redirect('admin/categories');
    }

    public function products(): void
    {
        $this->requireAuth();
        view('admin/products', [
            'products' => Product::all(),
            'categories' => Category::all(),
        ]);
    }

    public function productsStore(): void
    {
        $this->requireAuth();
        $upload = $this->handleUpload('image');
        Product::create([
            'category_id' => (int)($_POST['category_id'] ?? 0),
            'name' => trim($_POST['name'] ?? ''),
            'slug' => trim($_POST['slug'] ?? ''),
            'description' => trim($_POST['description'] ?? ''),
            'image_path' => $upload,
        ]);
        redirect('admin/products');
    }

    public function productsDelete(string $id): void
    {
        $this->requireAuth();
        Product::delete((int)$id);
        redirect('admin/products');
    }

    public function posts(): void
    {
        $this->requireAuth();
        view('admin/posts', ['posts' => Post::all()]);
    }

    public function postsStore(): void
    {
        $this->requireAuth();
        Post::create([
            'title' => trim($_POST['title'] ?? ''),
            'slug' => trim($_POST['slug'] ?? ''),
            'excerpt' => trim($_POST['excerpt'] ?? ''),
            'content' => trim($_POST['content'] ?? ''),
            'published_at' => date('Y-m-d H:i:s'),
        ]);
        redirect('admin/posts');
    }

    public function postsDelete(string $id): void
    {
        $this->requireAuth();
        Post::delete((int)$id);
        redirect('admin/posts');
    }

    public function faqs(): void
    {
        $this->requireAuth();
        view('admin/faqs', ['faqs' => Faq::all()]);
    }

    public function faqsStore(): void
    {
        $this->requireAuth();
        Faq::create([
            'question' => trim($_POST['question'] ?? ''),
            'answer' => trim($_POST['answer'] ?? ''),
        ]);
        redirect('admin/faqs');
    }

    public function faqsDelete(string $id): void
    {
        $this->requireAuth();
        Faq::delete((int)$id);
        redirect('admin/faqs');
    }

    public function leads(): void
    {
        $this->requireAuth();
        view('admin/leads', ['leads' => Lead::all()]);
    }

    public function settings(): void
    {
        $this->requireAuth();
        view('admin/settings', ['settings' => Setting::all()]);
    }

    public function settingsStore(): void
    {
        $this->requireAuth();
        $uploads = [
            'logo_light' => 'logo_light',
            'logo_dark' => 'logo_dark',
            'favicon' => 'favicon',
            'goremedya_logo' => 'goremedya_logo',
        ];
        foreach ($uploads as $field => $settingKey) {
            if (!empty($_FILES[$field]['name'])) {
                $uploadPath = $this->handleUpload($field);
                if ($uploadPath !== '') {
                    Setting::updateSetting($settingKey, $uploadPath);
                }
            }
        }
        foreach ($_POST as $key => $value) {
            Setting::updateSetting($key, trim((string)$value));
        }
        redirect('admin/settings');
    }

    private function handleUpload(string $field): string
    {
        if (empty($_FILES[$field]['name'])) {
            return '';
        }

        $file = $_FILES[$field];
        if ($file['error'] !== UPLOAD_ERR_OK) {
            return '';
        }

        $allowed = ['image/jpeg', 'image/png', 'image/webp', 'image/svg+xml', 'image/x-icon', 'image/vnd.microsoft.icon'];
        $finfo = new finfo(FILEINFO_MIME_TYPE);
        $mime = $finfo->file($file['tmp_name']);
        if (!in_array($mime, $allowed, true)) {
            return '';
        }

        if ($file['size'] > 5 * 1024 * 1024) {
            return '';
        }

        $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'webp', 'svg', 'ico'];
        if (!in_array($extension, $allowedExtensions, true)) {
            return '';
        }
        $filename = uniqid('upload_', true) . '.' . $extension;
        $destination = __DIR__ . '/../../public/uploads/' . $filename;
        if (!move_uploaded_file($file['tmp_name'], $destination)) {
            return '';
        }

        return 'uploads/' . $filename;
    }
}
