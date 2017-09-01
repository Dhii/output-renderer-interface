<?php

namespace Dhii\Output\Exception;

use Dhii\Exception\ThrowableInterface;
use Dhii\Output\ContextAwareInterface;

/**
 * Represents an exception thrown when the renderer fails to render the contents.
 *
 * @since 0.1
 */
interface CouldNotRenderExceptionInterface extends
    ThrowableInterface,
    RendererExceptionInterface,
    ContextAwareInterface
{
}
