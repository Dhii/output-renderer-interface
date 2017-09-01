<?php

namespace Dhii\Output\Exception;

use Dhii\Exception\ThrowableInterface;
use Dhii\Output\RendererAwareInterface;

/**
 * Represents an exception that is thrown when a renderer encounters an error.
 *
 * @since 0.1
 */
interface RendererExceptionInterface extends
        ThrowableInterface,
        RendererAwareInterface
{
}
