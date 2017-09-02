<?php

namespace Dhii\Output\Exception;

use Dhii\Output\RendererAwareInterface;
use Dhii\Exception\ThrowableInterface;

/**
 * An exception that occurs in relation to a render capable object.
 *
 * @since [*next-version*]
 */
interface RendererAwareExceptionInterface extends
        ThrowableInterface,
        RendererAwareInterface
{
}
