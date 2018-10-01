<?php

namespace Foo\Contracts;

interface LogInterface
{
    /**
     * error gets a message and show that as an error and finally break the flow
     * and exit the program
     *
     * @param string $message
     */
    public function error(?string $message);

    /**
     * debug get a message and show it as an debug information
     *
     * @param string $message
     */
    public function debug(string $message);


    /**
     * info get a message and show it as a general information
     *
     * @param string $message
     */
    public function info(string $message);
}
