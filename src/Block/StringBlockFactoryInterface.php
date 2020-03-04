<?php

namespace Dhii\Output\Block;

/**
 * Something that can create blocks based on a string.
 *
 * @since 0.4
 */
interface StringBlockFactoryInterface
{
    /**
     * Creates a new block representing the given string.
     *
     * @param string $string The string
     * @return BlockInterface The new block.
     *
     * @since 0.4
     */
    public function fromString(string $string): BlockInterface;
}
