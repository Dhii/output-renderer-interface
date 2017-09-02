<?php

namespace Dhii\Output\Exception;

use Dhii\Output\RenderableAwareInterface;
use Dhii\Exception\ThrowableInterface;

/**
 * An exception that occurs in relation to a renderable.
 *
 * @since [*next-version*]
 */
interface RenderableAwareExceptionInterface extends
        ThrowableInterface,
        RenderableAwareInterface
{
}
