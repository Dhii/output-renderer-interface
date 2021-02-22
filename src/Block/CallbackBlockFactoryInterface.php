<?php

declare(strict_types=1);

namespace Dhii\Output\Block;

/**
 * Something that can create blocks based on a callable.
 *
 * @since 0.4
 */
interface CallbackBlockFactoryInterface
{
    /**
     * Creates a new block that uses the given callable to generate output.
     *
     * @param callable $callback The callback to use for generating output.
     * function (CallbackBlockFactoryInterface $factory): string|StringableInterface
     * Receives the instance of the factory that created the block.
     * @return BlockInterface The new block.
     *
     * @since 0.4
     */
    public function fromCallback(callable $callback): BlockInterface;
}
