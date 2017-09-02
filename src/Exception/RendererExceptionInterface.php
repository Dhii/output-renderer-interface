<?php

namespace Dhii\Output\Exception;

use Dhii\Output\RendererAwareInterface;
use Dhii\Exception\ThrowableInterface;

/**
 * An exception that occurs in relation to a renderer.
 *
 * @since [*next-version*]
 */
interface RendererExceptionInterface extends
        ThrowableInterface,
        RendererAwareInterface
{
}
