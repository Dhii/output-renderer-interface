<?php

namespace Dhii\Output\Template;

/**
 * Something that can create templates from a path.
 *
 * @since [*next-version*]
 */
interface PathTemplateFactoryInterface
{
    /**
     * Creates a mew template from the specified template path.
     *
     * @param string $templatePath The path of the template. This can be a simple name, like 'text-field',
     * or a path like 'my-module/page-header', or a file path.
     *
     * @return TemplateInterface The new template.
     *
     * @since [*next-version*]
     */
    public function fromPath(string $templatePath): TemplateInterface;
}
