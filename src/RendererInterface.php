<?php

namespace Dhii\Output;

use Dhii\Util\String\StringableInterface as Stringable;
use Dhii\Output\Exception\ContextAwareRenderExceptionInterface;
use Dhii\Output\Exception\RenderCapableAwareExceptionInterface;

/**
 * Something that can render output.
 *
 * @since 0.1
 */
interface RendererInterface extends RenderCapableInterface
{
    /**
     * Produce output based on the specifics of this instance.
     *
     * @since 0.1
     *
     * @param mixed|null $context The context; something that can provide more information on how to perform rendering.
     *
     * @throws ContextAwareRenderExceptionInterface If cannot render.
     * @throws RenderCapableAwareExceptionInterface Any other problem related to the renderer.
     *
     * @return string|Stringable The output.
     */
    public function render($context = null);
}
