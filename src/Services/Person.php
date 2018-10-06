<?php

namespace Foo\Services;

use Foo\Contracts\PersonInterface;

class Person implements PersonInterface
{
    private $name;

    /**
     * @inheritdoc
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @inheritdoc
     */
    public function sayName(): string
    {
        return "Hello! I'm {$this->name}, have a nice time!";
    }
}
