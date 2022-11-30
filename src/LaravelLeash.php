<?php
declare(strict_types=1);

namespace PrinsFrank\LaravelLeash;

use PrinsFrank\LaravelLeash\Container\LeashedContainer;

class LaravelLeash
{
    private static bool $isLeashed = false;

    public static function bootstrap(bool $leash = true): void
    {
        LeashedContainer::setInstance(LeashedContainer::getLeashedInstance());

        static::leash($leash);
    }

    public static function isLeashed(): bool
    {
        return static::$isLeashed;
    }

    public static function leash(bool $leash = true): void
    {
        static::$isLeashed = $leash;
    }

    public static function unLeash(): void
    {
        static::leash(false);
    }
}
