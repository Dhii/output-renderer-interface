<?php

namespace Dhii\Output\Block;

use Dhii\Output\RendererInterface;
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
