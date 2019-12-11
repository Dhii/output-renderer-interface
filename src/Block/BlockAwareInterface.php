<?php

namespace Dhii\Output\Block;

/**
 * Something that can have a block retrieved from it.
 *
 * @since [*next-version*]
 */
interface BlockAwareInterface
{
    /**
     * Retrieves the block associated with this instance.
     *
     * @since [*next-version*]
     *
     * @return BlockInterface
     */
    public function getBlock();
}
