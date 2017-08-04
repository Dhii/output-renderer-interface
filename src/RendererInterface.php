<?php

namespace Dhii\Output;

use Dhii\Util\String\StringableInterface as Stringable;

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
     * @return string|Stringable The output.
     */
    public function render($context = null);
}
