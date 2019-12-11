<?php

namespace Dhii\Output\Template;

use ArrayAccess;
use Dhii\Output\Exception\RendererExceptionInterface;
use Dhii\Output\Exception\TemplateRenderExceptionInterface;
use Dhii\Output\RendererInterface;
use Dhii\Util\String\StringableInterface as Stringable;
use InvalidArgumentException;
use Psr\Container\ContainerInterface;

/**
 * Something that can render output based on a context.
 *
 * Context renderers are not required to have access to
 * all the data necessary for rendering at the time of
 * rendering.
 *
 * @since [*next-version*]
 */
interface TemplateInterface extends RendererInterface
{
    /**
     * Produce output based on context.
     *
     * @since [*next-version*]
     *
     * @param array|ArrayAccess|ContainerInterface|null The context. Something that can provide more
     *                                                  information on how to perform rendering.
     *
     * @throws TemplateRenderExceptionInterface If cannot render.
     * @throws RendererExceptionInterface       Any other problem related to the renderer.
     * @throws InvalidArgumentException         If context is invalid.
     *
     * @return string|Stringable The output.
     */
    public function render($context = null);
}
