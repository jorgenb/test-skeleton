<?php

namespace Jorgenb\TestSkeleton\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Jorgenb\TestSkeleton\TestSkeleton
 */
class TestSkeleton extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Jorgenb\TestSkeleton\TestSkeleton::class;
    }
}
