<?php

namespace Dhii\Output\Exception;

use Dhii\Output\ContextAwareInterface;

/**
 * Represents an exception thrown when the renderer fails to render the contents.
 *
 * @since [*next-version*]
 */
interface CouldNotRenderExceptionInterface extends
    RendererExceptionInterface,
    ContextAwareInterface
{
}
