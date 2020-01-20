<?php
namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class DistanceFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'distance';
    }
}
