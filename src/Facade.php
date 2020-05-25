<?php

namespace Longestdrive\LaravelUserSettings;


class Facade extends \Illuminate\Support\Facades\Facade {

    protected static function getFacadeAccessor()
    {
        return 'setting';
    }
    
}
