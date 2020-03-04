<?php

namespace Dhii\Output\Block;

/**
 * Something that can have a block retrieved from it.
 *
 * @since 0.4
 */
interface BlockAwareInterface
{
    /**
     * Retrieves the block associated with this instance.
     *
     * @since 0.4
     *
     * @return BlockInterface
     */
    public function getBlock();
}
