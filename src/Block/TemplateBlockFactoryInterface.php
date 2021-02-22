<?php

declare(strict_types=1);

namespace Dhii\Output\Block;

use ArrayAccess;
use Dhii\Output\Template\TemplateInterface;
use Psr\Container\ContainerInterface;

/**
 * Something that can create blocks based on a template
 *
 * @since 0.4
 */
interface TemplateBlockFactoryInterface
{
    /**
     * Creates a new block that uses the given template and context to generate output.
     *
     * @param TemplateInterface $template The template that will generate output.
     * @param array|ArrayAccess|ContainerInterface|null $context The context to use for the template.
     * @return BlockInterface The new block.
     *
     * @since 0.4
     */
    public function fromTemplate(TemplateInterface $template, $context): BlockInterface;
}
