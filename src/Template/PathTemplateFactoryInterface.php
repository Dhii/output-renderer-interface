<?php

declare(strict_types=1);

namespace Dhii\Output\Template;

/**
 * Something that can create templates from a path.
 *
 * @since 0.4
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
     * @since 0.4
     */
    public function fromPath(string $templatePath): TemplateInterface;
}
