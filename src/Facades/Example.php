<?php

namespace Shawnveltman\Example\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Shawnveltman\Example\Example
 */
class Example extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-package';
    }
}
