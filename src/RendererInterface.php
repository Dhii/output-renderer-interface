<?php

namespace Dhii\Output;

use Dhii\Util\String\StringableInterface as Stringable;
use Dhii\Output\Exception\CouldNotRenderExceptionInterface;
use Dhii\Output\Exception\RendererExceptionInterface;

/**
 * Something that can render output.
 *
 * @since [*next-version*]
 */
interface RendererInterface
{
    /**
     * Produce output based on the specifics of this instance.
     *
     * @since [*next-version*]
     *
     * @param mixed|null $context The context; something that can provide more information on how to perform rendering.
     *
     * @throws CouldNotRenderExceptionInterface If cannot render.
     * @throws RendererExceptionInterface       Any other problem related to the renderer.
     *
     * @return string|Stringable The output.
     */
    public function render($context = null);
}
