<?php

namespace Dhii\Output\Exception;

use Dhii\Output\ContextAwareInterface;
use Dhii\Output\Template\TemplateInterface;

/**
 * An exception that occurs when cannot render with a context.
 *
 * @since 0.4
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
     * @since 0.4
     *
     */
    public function getRenderer();
}
