# Output - Renderer - Interface
[![Build Status](https://travis-ci.org/Dhii/output-renderer-interface.svg?branch=master)](https://travis-ci.org/Dhii/output-renderer-interface)
[![Code Climate](https://codeclimate.com/github/Dhii/output-renderer-interface/badges/gpa.svg)](https://codeclimate.com/github/Dhii/output-renderer-interface)
[![Test Coverage](https://codeclimate.com/github/Dhii/output-renderer-interface/badges/coverage.svg)](https://codeclimate.com/github/Dhii/output-renderer-interface/coverage)
[![This package complies with Dhii standards](https://img.shields.io/badge/Dhii-Compliant-green.svg?style=flat-square)][Dhii]

Interfaces for rendering interoperability.

## Details
Like other members of the `Dhii\Output` namespace, interfaces in this package
are related to producing output, handling related errors, and providing
convenience around output functionality. Particularly, interfaces in this
package are at the core of output generation, defining a standard API for
anything that can render output.

Therefore, output renderers MUST implement `RendererInterface`. If
`RendererInterface#render()` is unable to produce output,
a `CouldNotRenderExceptionInterface` must be thrown.

- [`RendererInterface`] - Represents a renderer, i.e. something that can produce output, optionally based on context.
- [`RendererAwareInterface`] - Something that can have a renderer retrieved.
- [`ContextAwareInterface`] - Something that can have a rendering context retrieved.
- [`RendererExceptionInterface`] - An exception that occurs in relation to a renderer, and is aware of it.
- [`CouldNotRenderExceptionInterface`] - A specialized renderer exception that signals problems during rendering, and is additionally aware of rendering context.



[Dhii]:                                 https://github.com/Dhii/dhii

[`RendererInterface`]:                  src/RendererInterface.php
[`RendererAwareInterface`]:             src/RendererAwareInterface.php
[`ContextAwareInterface`]:              src/ContextAwareInterface.php
[`RendererExceptionInterface`]:         src/Exception/RendererExceptionInterface.php
[`CouldNotRenderExceptionInterface`]:   src/Exception/CouldNotRenderExceptionInterface.php
