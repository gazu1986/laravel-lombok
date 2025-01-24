<?php

use PHPUnit\Framework\TestCase;
use Gazu1986\LaravelLombok\Traits\GetterSetterTrait;

class User
{
    use GetterSetterTrait;

    private string $name;

    public function getName(): string
    {
        return strtoupper($this->name);
    }

    public function setName(string $value): void
    {
        $this->name = ucfirst($value);
    }
}

class LombokTest extends TestCase
{
    public function testSetterAndGetter()
    {
        $user = new User();
        $user->setName('john');
        $this->assertEquals('JOHN', $user->getName());
    }
}
