<?php

namespace LaraUtil\Foundation\Support\Faker\Provider\en_SG;

use Faker\Provider\en_SG\Address as BaseAddress;

class Address extends BaseAddress
{
    public function floorNumber()
    {
        return static::numerify(static::randomElement(static::$floorNumber));
    }

    public function apartmentNumber()
    {
        return static::numerify(static::randomElement(static::$apartmentNumber));
    }

    public static function latitude($min = 1.1304753, $max = 1.4504753)
    {
        return static::randomFloat(7, $min, $max);
    }

    public static function longitude($min = 103.6920359, $max = 104.0120359)
    {
        return static::randomFloat(7, $min, $max);
    }

    public static function postalCode()
    {
        return static::postcode();
    }
}
