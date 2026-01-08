<?php

declare(strict_types=1);

class User extends Model
{
    public static function findByEmail(string $email): ?array
    {
        return self::fetchOne('SELECT * FROM users WHERE email = :email', ['email' => $email]);
    }
}
