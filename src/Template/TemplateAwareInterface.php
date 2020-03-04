<?php

namespace Dhii\Output\Template;

use Dhii\Output\Template\TemplateInterface;

/**
 * Something that can have a template retrieved from it.
 *
 * @since 0.4
 */
interface TemplateAwareInterface
{
    /**
     * Retrieves the template associated with this instance.
     *
     * @since 0.4
     *
     * @return TemplateInterface|null The template, if any.
     */
    public function getTemplate();
}
