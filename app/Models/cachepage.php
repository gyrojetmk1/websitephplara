<?php

namespace App\Models;

class cachepage
{
    public static function cache($page)
    {
        $cachedview = cache() -> remember($page, 60, fn() => file_get_contents(__DIR__ . "./../../resources/views/". $page .".blade.php"));
        return $cachedview;
    }

}