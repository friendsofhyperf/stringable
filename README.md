# Stringable

[![Latest Test](https://github.com/friendsofhyperf/stringable/workflows/tests/badge.svg)](https://github.com/friendsofhyperf/stringable/actions)
[![Latest Stable Version](https://poser.pugx.org/friendsofhyperf/stringable/version.png)](https://packagist.org/packages/friendsofhyperf/stringable)
[![Total Downloads](https://poser.pugx.org/friendsofhyperf/stringable/d/total.png)](https://packagist.org/packages/friendsofhyperf/stringable)
[![GitHub license](https://img.shields.io/github/license/friendsofhyperf/stringable)](https://github.com/friendsofhyperf/stringable)

The stringable for hyperf.

## Installation

- Request

```bash
composer require friendsofhyperf/stringable
```

- Usage

```php
$str = Str::of('Hello World')->upper()->__toString();
$str = stringable('Hello World')->upper()->__toString();
```
