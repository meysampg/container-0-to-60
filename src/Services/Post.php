<?php

namespace Foo\Services;

class Post
{
    /**
     * getDate returns the complete string of today date
     *
     * @return string
     */
    public function getDate(): string
    {
        return "Today is: " . date('c');
    }

    /**
     * publish does some actions! :D
     */
    public function publish()
    {
        echo "Yes! This is a post and it's today date: " . $this->getDate() . PHP_EOL;
    }
}
