<?php

declare(strict_types=1);

class Setting extends Model
{
    public static function all(): array
    {
        $rows = self::fetchAll('SELECT * FROM settings');
        $settings = [];
        foreach ($rows as $row) {
            $settings[$row['key']] = $row['value'];
        }
        return $settings;
    }

    public static function updateSetting(string $key, string $value): bool
    {
        $existing = self::fetchOne('SELECT id FROM settings WHERE `key` = :key', ['key' => $key]);
        if ($existing) {
            return self::execute('UPDATE settings SET value = :value WHERE `key` = :key', ['value' => $value, 'key' => $key]);
        }
        return self::execute('INSERT INTO settings (`key`, value) VALUES (:key, :value)', ['key' => $key, 'value' => $value]);
    }
}
