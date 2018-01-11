<?php

namespace Dhii\Output;

use Psr\Container\ContainerInterface;

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
     * @return ContainerInterface|array|null The context.
     */
    public function getContext();
}
