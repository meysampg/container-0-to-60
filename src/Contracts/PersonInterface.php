<?php

namespace Foo\Contracts;

interface PersonInterface
{
    /**
     * Build the Person identity with getting his name
     *
     * @param string $name
     */
    public function __construct(string $name);

    /**
     * Person must be able to say his/her name
     *
     * @return string
     */
    public function sayName(): string;
}
