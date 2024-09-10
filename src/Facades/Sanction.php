<?php

namespace Fintech\Sanction\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * // Crud Service Method Point Do not Remove //
 *
 * @see \packages\Sanction\src\Sanction
 */
class Sanction extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \packages\Sanction\src\Sanction::class;
    }
}
