<?php

namespace Dhii\Output;

/**
 * Something that can produce output.
 *
 * @since [*next-version*]
 */
interface RenderCapableInterface
{
    /**
     * Produces output.
     *
     * @since [*next-version*]
     *
     * @throws CouldNotRenderExceptionInterface  If cannot render.
     * @throws RenderableAwareExceptionInterface Any other problem related to the renderer.
     *
     * @return string|Stringable The output.
     */
    public function render();
}
