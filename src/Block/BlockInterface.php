<?php

namespace Dhii\Output\Block;

use Dhii\Output\RendererInterface;
use Stringable;

/**
 * Represents a unit of output.
 *
 * Blocks have access to all the data necessary
 * for rendering at the time of rendering.
 *
 * @since 0.4
 */
interface BlockInterface extends
        RendererInterface,
        Stringable
{
}
