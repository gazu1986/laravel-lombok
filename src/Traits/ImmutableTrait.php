<?php

namespace Marko\LaravelLombok\Traits;

trait ImmutableTrait
{
    public function __set($name, $value)
    {
        throw new \Exception("Cannot modify immutable object.");
    }
}