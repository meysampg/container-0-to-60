<?php

namespace Foo\Services;

class NewPost extends Post
{
    /**
     * getDate returns complete string of date without any extra information
     *
     * @since 1.0.1 Result of function doesn't contain any extra information
     */
    public function getDate(): string
    {
        return date('c');
    }
}
