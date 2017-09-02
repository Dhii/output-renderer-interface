<?php

namespace Dhii\Output\Exception;

use Dhii\Output\ContextAwareInterface;

/**
 * An exception that occurs when cannot render with a context.
 *
 * @since [*next-version*]
 */
interface ContextAwareRenderExceptionInterface extends
    CouldNotRenderExceptionInterface,
    ContextAwareInterface
{
}
