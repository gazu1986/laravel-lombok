# Lombok-Laravel

A Laravel package for automatic getters and setters using PHP 8 attributes.

## Installation

```bash
composer require gazu1986/lombok-laravel
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
