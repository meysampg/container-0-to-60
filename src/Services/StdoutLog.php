<?php

namespace Foo\Services;

use Foo\Contracts\LogInterface;

/**
 * StdoutLog class is an implementation for LogInterface which send outputs to
 * the output
 */
class StdoutLog implements LogInterface
{
    /**
     * @inheritdoc
     */
    public function error(?string $message)
    {
        $now = date('c');
        $message = $message ?? "A general error has been occured.";

        echo "[ERROR] [{$now}] {$message}\n";

        exit(1);
    }

    /**
     * @inheritdoc
     */
    public function debug(string $message)
    {
        $now = date('c');

        echo "[DEBUG] [{$now}] {$message}\n";
    }

    /**
     * @inheritdoc
     */
    public function info(string $message)
    {
        $now = date('c');

        echo "[INFO] [{$now}] {$message}\n";
    }
}
