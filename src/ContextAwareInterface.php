<?php

declare(strict_types=1);

namespace Dhii\Output;

use ArrayAccess;
use Psr\Container\ContainerInterface;

/**
 * Something that can have a context retrieved from it.
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
     * @return array|ArrayAccess|ContainerInterface|null The context associated with this instance.
     */
    public function getContext();
}
