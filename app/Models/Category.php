<?php

declare(strict_types=1);

class Category extends Model
{
    public static function all(): array
    {
        return self::fetchAll('SELECT * FROM categories ORDER BY id DESC');
    }

    public static function findBySlug(string $slug): ?array
    {
        return self::fetchOne('SELECT * FROM categories WHERE slug = :slug', ['slug' => $slug]);
    }

    public static function create(array $data): bool
    {
        $sql = 'INSERT INTO categories (name, slug, description) VALUES (:name, :slug, :description)';
        return self::execute($sql, $data);
    }

    public static function delete(int $id): bool
    {
        return self::execute('DELETE FROM categories WHERE id = :id', ['id' => $id]);
    }
}
