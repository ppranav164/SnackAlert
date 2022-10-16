<?php

namespace Pranav\SnackAlert\Facades;

use Illuminate\Support\Facades\Facade;

class SnackAlert extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'SnackAlert';
    }

}
