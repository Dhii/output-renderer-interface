<?php

namespace Dhii\Output;

/**
 * Something that is aware of a context.
 *
 * @since [*next-version*]
 */
interface ContextAwareInterface
{
    /**
     * Retrieves the context.
     *
     * @since [*next-version*]
     *
     * @return mixed The context.
     */
    public function getContext();
}
