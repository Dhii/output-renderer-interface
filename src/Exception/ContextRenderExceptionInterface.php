<?php

namespace Dhii\Output\Exception;

use Dhii\Output\ContextAwareInterface;
use Dhii\Output\ContextRendererInterface;

/**
 * An exception that occurs when cannot render with a context.
 *
 * @since 0.1
 */
interface ContextRenderExceptionInterface extends
    CouldNotRenderExceptionInterface,
    ContextAwareInterface
{
    /**
     * {@inheritdoc}
     *
     * @since 0.1
     * 
     * @return ContextRendererInterface The renderer.
     */
    public function getRenderer();
}
