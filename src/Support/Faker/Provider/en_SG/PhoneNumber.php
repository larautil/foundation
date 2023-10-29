<?php

namespace LaraUtil\Foundation\Support\Faker\Provider\en_SG;

use Faker\Provider\en_SG\PhoneNumber as BasePhoneNumber;

class PhoneNumber extends BasePhoneNumber
{
    public function mobile()
    {
        $format = static::randomElement([
            '9{{zeroToEight}}######',
            '8{{oneToEight}}######',
        ]);

        return static::numerify($this->generator->parse($format));
    }

}
