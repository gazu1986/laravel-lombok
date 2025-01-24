# Lombok-Laravel

A Laravel package for automatic getters and setters using PHP 8 attributes.

## Installation

```bash
composer require your-vendor/lombok-laravel
```
## Usage

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
