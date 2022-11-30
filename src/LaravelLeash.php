<?php
declare(strict_types=1);

namespace PrinsFrank\LaravelLeash;

use Illuminate\Container\Container;
use PrinsFrank\LaravelLeash\Container\LeashedContainer;

class LaravelLeash
{
    private static bool $isLeashed = false;

    public static function bootstrap(bool $leash = true): void
    {
        if (static::isBootStrapped() === false) {
            LeashedContainer::setInstance(LeashedContainer::getLeashedInstance());
        }

        static::leash($leash);
    }

    public static function isBootStrapped(): bool
    {
        return is_a(Container::getInstance(), static::class);
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
