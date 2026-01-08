<?php

declare(strict_types=1);

class Product extends Model
{
    public static function all(): array
    {
        return self::fetchAll('SELECT p.*, c.name AS category_name, c.slug AS category_slug FROM products p LEFT JOIN categories c ON p.category_id = c.id ORDER BY p.id DESC');
    }

    public static function byCategorySlug(string $slug): array
    {
        $sql = 'SELECT p.*, c.name AS category_name, c.slug AS category_slug FROM products p INNER JOIN categories c ON p.category_id = c.id WHERE c.slug = :slug ORDER BY p.id DESC';
        return self::fetchAll($sql, ['slug' => $slug]);
    }

    public static function findBySlug(string $slug): ?array
    {
        $sql = 'SELECT p.*, c.name AS category_name, c.slug AS category_slug FROM products p LEFT JOIN categories c ON p.category_id = c.id WHERE p.slug = :slug';
        return self::fetchOne($sql, ['slug' => $slug]);
    }

    public static function create(array $data): bool
    {
        $sql = 'INSERT INTO products (category_id, name, slug, description, image_path) VALUES (:category_id, :name, :slug, :description, :image_path)';
        return self::execute($sql, $data);
    }

    public static function delete(int $id): bool
    {
        return self::execute('DELETE FROM products WHERE id = :id', ['id' => $id]);
    }
}
