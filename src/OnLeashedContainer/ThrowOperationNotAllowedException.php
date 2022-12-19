<?php
declare(strict_types=1);

namespace PrinsFrank\LaravelLeash;

use PrinsFrank\LaravelLeash\Exception\OperationNotAllowedInLeashedModeException;

class ThrowOperationNotAllowedException implements OnLeashedContainer
{
    /**
     * @throws OperationNotAllowedInLeashedModeException
     */
    public function __invoke(string $methodName, array $args): void
    {
        throw new OperationNotAllowedInLeashedModeException('Accessing the Laravel container in leashed mode is not allowed. (method "' . $methodName . '" with arguments "' . var_export($args, true) . '"');
    }
}
