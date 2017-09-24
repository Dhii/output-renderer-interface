<?php

namespace Dhii\Output;

/**
 * Something that can have a template retrieved from it.
 *
 * @since [*next-version*]
 */
interface TemplateAwareInterface
{
    /**
     * Retrieves the template associated with this instance.
     *
     * @since [*next-version*]
     *
     * @return TemplateInterface|null The template, if any.
     */
    public function getTemplate();
}
