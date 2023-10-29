<?php

namespace LaraUtil\Foundation\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \LaraUtil\Foundation\Foundation
 */
class Foundation extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \LaraUtil\Foundation\Foundation::class;
    }
}
