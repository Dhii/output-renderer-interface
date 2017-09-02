<?php

namespace Dhii\Output;

/**
 * Something that can have a render-capable object retrieved from it.
 *
 * @since [*next-version*]
 */
interface RendererAwareInterface
{
    /**
     * Retrieves the render-capable object that is associated with this instance.
     *
     * @since [*next-version*]
     *
     * @return RendererInterface The render-capable object.
     */
    public function getRenderer();
}
