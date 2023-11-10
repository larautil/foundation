<?php

namespace LaraUtil\Foundation\Traits;

use Spatie\Enum\Exceptions\UnknownEnumProperty;

trait ColorfulEnum
{
    protected $color;

    public function __construct($value)
    {
        parent::__construct($value);

        $this->color = static::colors()[$value];
    }

    public function __get(string $name)
    {
        if ($name === 'label') {
            return $this->label;
        }

        if ($name === 'value') {
            return $this->value;
        }

        if ($name === 'color') {
            return $this->color;
        }

        throw UnknownEnumProperty::new(static::class, $name);
    }

    abstract protected static function colors(): array;

    /**
     * @return string[]
     *
     * @psalm-return array<string|int, string>
     */
    public static function toColorArray(): array
    {
        $array = [];

        foreach (static::toArray() as $key => $value) {
            $array[$value] = static::colors()[array_search($value, static::labels())];
        }

        return $array;
    }
}
