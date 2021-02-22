<?php

declare(strict_types=1);

namespace Dhii\Output\Template;

use ArrayAccess;
use Dhii\Output\Exception\RendererExceptionInterface;
use Dhii\Output\Exception\TemplateRenderExceptionInterface;
use Dhii\Output\RendererInterface;
use Exception;
use Stringable;
use InvalidArgumentException;
use Psr\Container\ContainerInterface;

/**
 * Something that can render output based on a context.
 *
 * Context renderers are not required to have access to
 * all the data necessary for rendering at the time of
 * rendering.
 *
 * @since 0.4
 * @psalm-type Context = array<scalar|Stringable>|ArrayAccess|ContainerInterface
 */
interface TemplateInterface extends RendererInterface
{
    /**
     * Produce output based on context.
     *
     * @since 0.4
     *
     * @param Context|null The context. Something that can provide more
     *                                                  information on how to perform rendering.
     *
     * @throws TemplateRenderExceptionInterface If cannot render.
     * @throws RendererExceptionInterface       Any other problem related to the renderer.
     * @throws InvalidArgumentException         If context is invalid.
     * @throws Exception                        Any other problem.
     *
     * @return string|Stringable The output.
     * @phpcsSuppress SlevomatCodingStandard.TypeHints.ParameterTypeHint.MissingAnyTypeHint
     */
    public function render($context = null);
}
