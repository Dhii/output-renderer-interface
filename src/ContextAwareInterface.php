<?php

declare(strict_types=1);

namespace Dhii\Output;

use ArrayAccess;
use Psr\Container\ContainerInterface;
use Stringable;

/**
 * Something that can have a context retrieved from it.
 * @psalm-type Context = array<scalar|Stringable>|ArrayAccess|ContainerInterface
 *
 * @since 0.1
 */
interface ContextAwareInterface
{
    /**
     * Retrieves the context associated with this instance.
     *
     * @since 0.1
     *
     * @return Context|null The context associated with this instance.
     * @phpcsSuppress SlevomatCodingStandard.TypeHints.ReturnTypeHint.MissingNativeTypeHint
     */
    public function getContext();
}
