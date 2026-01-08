<?php

declare(strict_types=1);

class BlogController
{
    private function settings(): array
    {
        return Setting::all();
    }

    public function index(): void
    {
        $posts = Post::all();
        $meta = [
            'title' => 'Blog | Emek Mermer Antalya',
            'description' => 'Mermer ve granit hakkında bilgi, bakım önerileri ve trendler.',
        ];
        view('blog', ['posts' => $posts, 'meta' => $meta, 'settings' => $this->settings()]);
    }

    public function show(string $slug): void
    {
        $post = Post::findBySlug($slug);
        if (!$post) {
            http_response_code(404);
            view('404');
            return;
        }
        $meta = [
            'title' => $post['title'] . ' | Emek Mermer Antalya',
            'description' => $post['excerpt'] ?? mb_substr(strip_tags($post['content'] ?? ''), 0, 150),
        ];
        view('blog-detail', ['post' => $post, 'meta' => $meta, 'settings' => $this->settings()]);
    }
}
