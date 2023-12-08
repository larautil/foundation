<?php

namespace LaraUtil\Foundation\Traits;

use Illuminate\Support\Str;

trait HasTablePrefix
{
    protected string $prefix = '';

    /**
     * Get the table associated with the model.
     *
     * @return string
     */
    public function getTable()
    {
        return Str::start(parent::getTable(), $this->getPrefix());
    }

    /**
     * Get the prefix associated with the model.
     *
     * @return string
     */
    public function getPrefix()
    {
        return $this->prefix;
    }
}
