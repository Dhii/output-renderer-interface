<?php

namespace Dhii\Output\Template;

/**
 * Something that can create templates from a path.
 *
 * @since [*next-version*]
 */
interface StringTemplateFactoryInterface
{
    /**
     * Creates a mew template from the given template string.
     *
     * Useful for creating templates based on strings with placeholders.
     *
     * @param string $template The template string. Example: 'Hello, ${username}!';
     *
     * @return TemplateInterface The new template.
     *
     * @since [*next-version*]
     */
    public function fromString(string $template): TemplateInterface;
}
