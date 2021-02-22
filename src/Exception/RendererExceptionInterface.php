<?php

declare(strict_types=1);

namespace Dhii\Output\Exception;

use Dhii\Output\RendererAwareInterface;
use Throwable;

/**
 * An exception that occurs in relation to a renderer.
 *
 * @since 0.1
 */
interface RendererExceptionInterface extends
    Throwable,
    RendererAwareInterface
{
}
