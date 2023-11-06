<?php

/**
 * |----------------------------------------------------------------------------
 * | Use uuid as secondary key and route key
 * |----------------------------------------------------------------------------
 */

namespace LaraUtil\Foundation\Traits;

use Illuminate\Support\Str;

trait HasUuid
{
    protected static string $uuidColumnName = 'uuid';

    protected static bool $useUuidAsRouteKey = true;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{self::$uuidColumnName} = Str::orderedUuid()->toString();
        });
    }

    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName(): string
    {
        return self::$useUuidAsRouteKey ? self::$uuidColumnName : $this->getKeyName();
    }
}
