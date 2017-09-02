<?php

namespace Dhii\Output;

/**
 * Something that can have a renderer retrieved from it.
 *
 * @since [*next-version*]
 */
interface RendererAwareInterface
{
    /**
     * Retrieves the renderer that is associated with this instance.
     *
     * @since [*next-version*]
     *
     * @return RendererInterface The renderer.
     */
    public function getRenderer();
}
