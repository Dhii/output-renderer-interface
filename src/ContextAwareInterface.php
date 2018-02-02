<?php

namespace Dhii\Output;

use ArrayAccess;
use Psr\Container\ContainerInterface;
use stdClass;

/**
 * Something that can have a context retrieved from it.
 *
 * @since 0.1
 */
interface ContextAwareInterface
{
    /**
     * Retrieves the context.
     *
     * @since 0.1
     *
     * @return array|ArrayAccess|stdClass|ContainerInterface|null The context.
     */
    public function getContext();
}
