<?php

namespace Medo19\Naqd\Facades;

use Illuminate\Support\Facades\Facade;

class Naqd extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'naqd';
    }
}
