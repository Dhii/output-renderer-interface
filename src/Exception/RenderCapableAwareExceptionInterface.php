<?php

namespace Dhii\Output\Exception;

use Dhii\Output\RenderCapableAwareInterface;
use Dhii\Exception\ThrowableInterface;

/**
 * An exception that occurs in relation to a render capable object.
 *
 * @since [*next-version*]
 */
interface RenderCapableAwareExceptionInterface extends
        ThrowableInterface,
        RenderCapableAwareInterface
{
}
