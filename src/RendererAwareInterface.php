<?php

namespace Dhii\Output;

/**
 * Something that is aware of a renderer.
 *
 * @since [*next-version*]
 */
interface RendererAwareInterface
{
    /**
     * Retrieves the renderer for this instance.
     *
     * @since [*next-version*]
     *
     * @return RendererInterface
     */
    public function getRenderer();
}
