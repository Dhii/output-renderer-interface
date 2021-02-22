<?php

declare(strict_types=1);

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
     */
    public function getBlock(): BlockInterface;
}
