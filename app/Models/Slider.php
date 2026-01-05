<?php

declare(strict_types=1);

class Slider extends Model
{
    public static function all(): array
    {
        return self::fetchAll('SELECT * FROM sliders ORDER BY sort_order ASC, id DESC');
    }

    public static function create(array $data): bool
    {
        $sql = 'INSERT INTO sliders (title, subtitle, image_path, sort_order, is_active) VALUES (:title, :subtitle, :image_path, :sort_order, :is_active)';
        return self::execute($sql, $data);
    }

    public static function delete(int $id): bool
    {
        return self::execute('DELETE FROM sliders WHERE id = :id', ['id' => $id]);
    }
}
