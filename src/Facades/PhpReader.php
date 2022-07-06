<?php

namespace ZeroPlex\PhpReader\Facades;
use Illuminate\Support\Facades\Facade;

class PhpReader extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'zeroplex.php-reader';
    }
}
