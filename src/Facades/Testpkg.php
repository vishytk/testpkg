<?php

namespace Vishy\Testpkg\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Vishy\Testpkg\Testpkg
 */
class Testpkg extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Vishy\Testpkg\Testpkg::class;
    }
}
