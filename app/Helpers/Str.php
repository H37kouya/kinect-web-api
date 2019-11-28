<?php

namespace App\Helpers;

use Illuminate\Support\Str as StrIlluminate;

class Str extends StrIlluminate
{
    public static function strcmpBool(string $str1, string $str2): bool
    {
        return strcmp($str1, $str2) === 0;
    }
}
