# Change log
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/)
and this project adheres to [Semantic Versioning](http://semver.org/).

## [0.4-alpha1] - YYYY-MM-DD
### Removed
- No longer depending on Dhii exceptions.
- No longer depending on XPMock.
- No longer depending on Dhii factory standard.
- `BlockFactoryInterface` and `TemplateFactoryInterface`.
- Support for PHP 5.x.
- Rendering context can no longer be a class e.g. `stdClass`.

### Fixed
- Test subject name for `TemplateRenderExceptionInterface` test.

### Changed
- Switched to PHP 7.1.
- Switched to PHPUnit 6.
- Renderers can now throw generic `Exception`.

### Added
- Docker environment.
- PHPStorm integrations.
- Renderers can now throw `Exception` while rendering.
- Specific factory interfaces for blocks and templates.

## [0.3] - 2019-11-14
Stable release.

## [0.3-alpha2] - 2018-04-05
### Added
- `TemplateFactoryInterface`.
- `BlockFactoryInterface`.

## [0.3-alpha1] - 2018-04-05
### Changed
- Now also allowing `ArrayAccess` and `stdClass` types as contexts.
- Moved block- and template-related classes to their own respective directories.

## [0.2] - 2017-10-04
Some re-ordering and re-naming mostly.

### Added
- `TemplateAwareInterface`, which can return the new `TemplateInterface`.

### Changed
- `ContextRendererInterface` is now `TemplateInterface`; corresponding exception
also updated from `ContextRenderExceptionInterface` to `TemplateRenderExceptionInterface`.

## [0.1] - 2017-09-08
Initial release.
