<?php

namespace Dhii\Output;

use Dhii\Util\String\StringableInterface as Stringable;
use Dhii\Output\Exception\TemplateRenderExceptionInterface;
use Dhii\Output\Exception\RendererExceptionInterface;

/**
 * Something that can render output based on a context.
 *
 * Context renderers are not required to have access to
 * all the data necessary for rendering at the time of
 * rendering.
 *
 * @since 0.2
 */
interface TemplateInterface extends RendererInterface
{
    /**
     * Produce output based on context.
     *
     * @since 0.2
     *
     * @param mixed|null $context The context;
     *                            something that can provide more information on how to perform rendering.
     *
     * @throws TemplateRenderExceptionInterface If cannot render.
     * @throws RendererExceptionInterface       Any other problem related to the renderer.
     *
     * @return string|Stringable The output.
     */
    public function render($context = null);
}