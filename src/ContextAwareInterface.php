<?php

namespace Dhii\Output;

/**
 * Something that is aware of a context.
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
