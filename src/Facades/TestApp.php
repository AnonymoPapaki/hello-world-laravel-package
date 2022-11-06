<?php
namespace Nokanoki\HelloWorldLaravelPackage\Facades;

use Illuminate\Support\Facades\Facade;

class TestApp extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'TestApp';
    }
}