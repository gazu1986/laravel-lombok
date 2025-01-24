<?php

namespace Marko\LaravelLombok\Traits;

trait GetterSetterTrait
{
    public function __get($name)
    {
        $method = 'get' . ucfirst($name);
        if (method_exists($this, $method)) {
            return $this->$method();
        }
        throw new \Exception("Property {$name} not found.");
    }

    public function __set($name, $value)
    {
        $method = 'set' . ucfirst($name);
        if (method_exists($this, $method)) {
            $this->$method($value);
        } else {
            throw new \Exception("Property {$name} is read-only.");
        }
    }
}