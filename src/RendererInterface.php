<?php

namespace Dhii\Output;

use Dhii\Output\Exception\CouldNotRenderExceptionInterface;
use Dhii\Output\Exception\RendererExceptionInterface;

/**
 * Something that can produce output.
 *
 * @since [*next-version*]
 */
interface RendererInterface
{
    /**
     * Produces output.
     *
     * @since [*next-version*]
     *
     * @throws CouldNotRenderExceptionInterface If cannot render.
     * @throws RendererExceptionInterface       Any other problem related to the renderer.
     *
     * @return string|Stringable The output.
     */
    public function render();
}
