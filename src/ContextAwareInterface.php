<?php

namespace Dhii\Output;

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
     * @return mixed The context.
     */
    public function getContext();
}
