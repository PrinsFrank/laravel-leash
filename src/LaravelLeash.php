<?php
declare(strict_types=1);

namespace PrinsFrank\LaravelLeash;

use Illuminate\Container\Container;
use PrinsFrank\LaravelLeash\Container\LeashedContainer;

class LaravelLeash
{
    protected static bool $isLeashed = false;

    protected static OnLeashedContainer $onLeashedContainer;

    public static function bootstrap(?OnLeashedContainer $onLeashedContainer = null): void
    {
        if (static::isBootStrapped() === false) {
            LeashedContainer::setInstance(LeashedContainer::getLeashedInstance());
        }

        static::$onLeashedContainer = $onLeashedContainer ?? new ThrowOperationNotAllowedException();
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

    public static function onContainerCall(string $methodName, array $args): void
    {
        if (static::isLeashed()) {
            (static::$onLeashedContainer)($methodName, $args);
        }
    }
}
