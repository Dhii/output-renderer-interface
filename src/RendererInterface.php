<?php

namespace Dhii\Output;

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
     * @param mixed|null $context The rendering context.
     *  Something that can provide more information on how to perform the rendering.
     *
     * @return string|\Dhii\Util\String\StringableInterface The output.
     */
    public function render($context = null);
}
