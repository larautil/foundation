<?php

namespace LaraUtil\Foundation\Helpers;

use Faker\Generator;
use LaraUtil\Foundation\Support\Faker\Provider\en_SG\Address;
use Faker\Provider\en_SG\Person;
use LaraUtil\Foundation\Support\Faker\Provider\en_SG\PhoneNumber;
use LaraUtil\Foundation\Support\Faker\Provider\en_SG\Area;

class SGFaker
{
    protected Generator $faker;

    public function __construct()
    {
        $faker = new Generator();
        $faker->addProvider(new Address($faker));
        $faker->addProvider(new Person($faker));
        $faker->addProvider(new PhoneNumber($faker));
        $faker->addProvider(new Area($faker));

        $this->faker = $faker;
    }

    public function __call($name, $arguments)
    {
        return $this->faker->$name(...$arguments);
    }

    public static function __callStatic($name, $arguments)
    {
        $faker = new Generator();
        $faker->addProvider(new Address($faker));
        $faker->addProvider(new Person($faker));
        $faker->addProvider(new PhoneNumber($faker));
        $faker->addProvider(new Area($faker));

        return $faker->$name(...$arguments);
    }
}
