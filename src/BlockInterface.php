<?php

namespace Dhii\Output;

use Dhii\Util\String\StringableInterface;

/**
 * Represents a unit of output.
 *
 * Blocks have access to all the data necessary
 * for rendering at the time of rendering.
 *
 * @since [*next-version*]
 */
interface BlockInterface extends
        RendererInterface,
        StringableInterface
{
}
