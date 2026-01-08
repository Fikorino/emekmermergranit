<?php

declare(strict_types=1);

class Lead extends Model
{
    public static function all(): array
    {
        return self::fetchAll('SELECT * FROM leads ORDER BY created_at DESC');
    }

    public static function create(array $data): bool
    {
        $sql = 'INSERT INTO leads (name, email, phone, message) VALUES (:name, :email, :phone, :message)';
        return self::execute($sql, $data);
    }
}
