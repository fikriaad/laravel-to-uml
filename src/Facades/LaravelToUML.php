<?php

namespace Fikriaad\LaravelToUML\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelToUML extends Facade {
    protected static function getFacadeAccessor() {
        return 'laravel-to-uml';
    }
}