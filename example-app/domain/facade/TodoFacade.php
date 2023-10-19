<?php 

namespace domain\facade;

use domain\services\TodoService;
use Illuminate\Support\Facades\Facade;


class TodoFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return TodoService::class;
    }
}