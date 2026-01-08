<?php

declare(strict_types=1);

class Post extends Model
{
    public static function all(): array
    {
        return self::fetchAll('SELECT * FROM posts ORDER BY published_at DESC');
    }

    public static function findBySlug(string $slug): ?array
    {
        return self::fetchOne('SELECT * FROM posts WHERE slug = :slug', ['slug' => $slug]);
    }

    public static function create(array $data): bool
    {
        $sql = 'INSERT INTO posts (title, slug, excerpt, content, published_at) VALUES (:title, :slug, :excerpt, :content, :published_at)';
        return self::execute($sql, $data);
    }

    public static function delete(int $id): bool
    {
        return self::execute('DELETE FROM posts WHERE id = :id', ['id' => $id]);
    }
}
