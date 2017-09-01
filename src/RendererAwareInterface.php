<?php

namespace Dhii\Output;

/**
 * Something that is aware of a renderer.
 *
 * @since 0.1
 */
interface RendererAwareInterface
{
    /**
     * Retrieves the renderer for this instance.
     *
     * @since 0.1
     *
     * @return RendererInterface
     */
    public function getRenderer();
}
