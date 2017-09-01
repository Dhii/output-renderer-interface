<?php

namespace Dhii\Output\Exception;

use Dhii\Exception\ThrowableInterface;
use Dhii\Output\ContextAwareInterface;

/**
 * Represents an exception thrown when the renderer fails to render the contents.
 *
 * @since [*next-version*]
 */
interface CouldNotRenderExceptionInterface extends
    ThrowableInterface,
    RendererExceptionInterface,
    ContextAwareInterface
{
}
