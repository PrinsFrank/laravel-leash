<?php
declare(strict_types=1);

namespace PrinsFrank\LaravelLeash;

interface OnLeashedContainer
{
    public function __invoke(string $methodName, array $args): void;
}
