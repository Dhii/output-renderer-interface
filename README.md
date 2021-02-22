# Dhii - Output - Renderer - Interface
[![Continuous Integration](https://github.com/Dhii/delimited-token-template/actions/workflows/continuous-integration.yml/badge.svg)](https://github.com/Dhii/delimited-token-template/actions/workflows/continuous-integration.yml)
[![Latest Stable Version](https://poser.pugx.org/dhii/output-renderer-interface/version)](https://packagist.org/packages/dhii/output-renderer-interface)
[![Latest Unstable Version](https://poser.pugx.org/dhii/output-renderer-interface/v/unstable)](//packagist.org/packages/dhii/output-renderer-interface)

Interfaces for rendering interoperability.

## Details
Like other members of the `Dhii\Output` namespace, interfaces in this package
are related to producing output, handling related errors, and providing
convenience around output functionality. Particularly, interfaces in this
package are at the core of output generation, defining a standard API for
anything that can render output.

Therefore, output renderers MUST implement `RendererInterface`. If
`RendererInterface#render()` is unable to produce output,
a `CouldNotRenderExceptionInterface` MUST be thrown.

### Interfaces
- [`RendererInterface`] - Represents a renderer, i.e. something that can produce output.
- [`TemplateInterface`] - A renderer that uses context to render.
- [`PathTemplateFactoryInterface`] - A factory that creates templates from paths.
- [`StringTemplateFactoryInterface`] - A factory that creates templates from strings.
- [`BlockInterface`] - A renderer that has access to the render context, and is also [stringable].
- [`CallbackBlockFactoryInterface`] - A factory that creates blocks from callbacks.
- [`StringBlockFactoryInterface`] - A factory that creates blocks from strings.
- [`TemplateBlockFactoryInterface`] - A factory that creates blocks from templates.
- [`RendererAwareInterface`] - Something that exposes a renderer.
- [`ContextAwareInterface`] - Something that can have a rendering context retrieved.
- [`BlockAwareInterface`] - Something that can have a block retrieved.
- [`TemplateAwareInterface`] - Something that can have a template retrieved.
- [`RendererExceptionInterface`] - An exception that occurs in relation to a renderer, and is aware of it.
- [`CouldNotRenderExceptionInterface`] - A specialized renderer exception that signals problems during rendering.
- [`TemplateRenderExceptionInterface`] - A specialized "could-not-render" exception that is aware
of the rendering context.



[Dhii]:                                 https://github.com/Dhii/dhii
[stringable]:                           https://github.com/Dhii/stringable-interface

[`RendererInterface`]:                  src/RendererInterface.php
[`TemplateInterface`]:                  src/Template/TemplateInterface.php
[`PathTemplateFactoryInterface`]:       src/Template/PathTemplateFactoryInterface.php
[`StringTemplateFactoryInterface`]:     src/Template/StringTemplateFactoryInterface.php
[`BlockInterface`]:                     src/Block/BlockInterface.php
[`CallbackBlockFactoryInterface`]:      src/Block/BlockFactoryInterface.php
[`StringBlockFactoryInterface`]:        src/Block/StringBlockFactoryInterface.php
[`TemplateBlockFactoryInterface`]:      src/Block/TemplateBlockFactoryInterface.php
[`RendererAwareInterface`]:             src/RendererAwareInterface.php
[`ContextAwareInterface`]:              src/ContextAwareInterface.php
[`BlockAwareInterface`]:                src/Block/BlockAwareInterface.php
[`TemplateAwareInterface`]:             src/Template/TemplateAwareInterface.php
[`RendererExceptionInterface`]:         src/Exception/RendererExceptionInterface.php
[`CouldNotRenderExceptionInterface`]:   src/Exception/CouldNotRenderExceptionInterface.php
[`TemplateRenderExceptionInterface`]:   src/Exception/ContextRenderExceptionInterface.php
