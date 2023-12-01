<?php

use Illuminate\Support\Str;

define('CASE_CAMEL', 2);
define('CASE_KEBAB', 3);
define('CASE_SNAKE', 4);
define('CASE_STUDLY', 5);
define('CASE_TITLE', 6);

if (! function_exists('array_change_key_casing')) {
    /**
     * Changes the case of all keys in an array
     * Support: 1
     */
    function array_change_key_casing(array $array, int $casing = 0): array
    {
        $casingMethod = match ($casing) {
            1 => 'upper',
            2 => 'camel',
            3 => 'kebab',
            4 => 'snake',
            5 => 'studly',
            6 => 'title',
            default => 'lower'
        };

        return collect($array)
            ->mapWithKeys(function ($value, $key) use ($casingMethod) {
                return [Str::$casingMethod($key) => $value];
            })
            ->toArray();
    }
}
