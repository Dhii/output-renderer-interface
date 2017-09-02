<?php

namespace Dhii\Output;

/**
 * Something that is aware of a block.
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
