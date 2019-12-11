<?php

namespace Dhii\Output\Exception;

use Dhii\Output\ContextAwareInterface;
use Dhii\Output\Template\TemplateInterface;

/**
 * An exception that occurs when cannot render with a context.
 *
 * @since [*next-version*]
 */
interface TemplateRenderExceptionInterface extends
    CouldNotRenderExceptionInterface,
    ContextAwareInterface
{
    /**
     * {@inheritdoc}
     *
     * @return TemplateInterface The renderer.
     *
     * @since [*next-version*]
     *
     */
    public function getRenderer();
}
