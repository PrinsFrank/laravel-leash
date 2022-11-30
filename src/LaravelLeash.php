<?php
declare(strict_types=1);

namespace PrinsFrank\LaravelLeash;

use Illuminate\Container\Container;
use PrinsFrank\LaravelLeash\Container\LeashedContainer;

class LaravelLeash
{
    private static bool $isLeashed = false;

    public function bootstrap(bool $leash = true): void
    {
        Container::setInstance(LeashedContainer::getInstance());

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
