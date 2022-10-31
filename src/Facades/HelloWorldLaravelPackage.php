<?php

namespace Eugene\HelloWorldLaravelPackage\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Eugene\HelloWorldLaravelPackage\HelloWorldLaravelPackage
 */
class HelloWorldLaravelPackage extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Eugene\HelloWorldLaravelPackage\HelloWorldLaravelPackage::class;
    }
}
