<?php

namespace Dhii\Output\Exception;

use Dhii\Output\ContextAwareInterface;
use Dhii\Output\ContextRendererInterface;

/**
 * An exception that occurs when cannot render with a context.
 *
 * @since [*next-version*]
 */
interface ContextRenderExceptionInterface extends
    CouldNotRenderExceptionInterface,
    ContextAwareInterface
{
    /**
     * {@inheritdoc}
     *
     * @since [*next-version*]
     * 
     * @return ContextRendererInterface The renderer.
     */
    public function getRenderer();
}
