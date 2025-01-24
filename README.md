# Lombok-Laravel

A Laravel package for automatic getters and setters using PHP 8 attributes.

## Installation

You can install the package via Composer:

```bash
composer require gazu1986/laravel-lombok-lib
```

## Usage

To use the package, include the `GetterSetterTrait` in your class:

```php
use LombokLaravel\Attributes\Getter;
use LombokLaravel\Attributes\Setter;
use LombokLaravel\Traits\GetterSetterTrait;

class User {
    use GetterSetterTrait;

    #[Getter, Setter]
    private string $name;
}
```
