<?php

namespace Dhii\Output;

/**
 * Something that can have a renerable retrieved from it.
 *
 * @since [*next-version*]
 */
interface RenderableAwareInterface
{
    /**
     * Retrieves the renderable that is associated with this instance.
     *
     * @since [*next-version*]
     *
     * @return RenderableInterface The renderable.
     */
    public function getRenderable();
}
