<?php

namespace Fintech\Sanction\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * // Crud Service Method Point Do not Remove //
 *
 * @see \Fintech\Sanction\Sanction
 */
class Sanction extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Fintech\Sanction\Sanction::class;
    }
}
