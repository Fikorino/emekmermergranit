<?php

declare(strict_types=1);

class Faq extends Model
{
    public static function all(): array
    {
        return self::fetchAll('SELECT * FROM faqs ORDER BY id DESC');
    }

    public static function create(array $data): bool
    {
        $sql = 'INSERT INTO faqs (question, answer) VALUES (:question, :answer)';
        return self::execute($sql, $data);
    }

    public static function delete(int $id): bool
    {
        return self::execute('DELETE FROM faqs WHERE id = :id', ['id' => $id]);
    }
}
