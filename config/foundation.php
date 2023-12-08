<?php

use LaraUtil\Foundation\Enums\DateRange;

return [

    /**
     * Local settings
     */
    'country' => 'Singapore',

    'timezone' => 'Asia/Singapore',

    'date_format' => 'd-m-Y',

    'datetime_format' => 'd-m-Y H:i:s',

    /**
     * If you want to include the current day/week/month/year etc. in the range,
     * you could use the inclusive range here as a default.
     * Note that you can also fluently specify it for quite every scope we offer
     * directly when using the scope:
     * Transaction::ofLast7Days(customRange: DateRange::INCLUSIVE); (this works for all but the singular "ofLast"-scopes)
     * This will do an inclusive query, even though the global default range here is set to exclusive.
     */
    'default_range' => env('DATE_SCOPES_DEFAULT_RANGE', DateRange::EXCLUSIVE->value),

    /**
     * If you have a custom created_at column name, change it here.
     */
    'created_column' => env('DATE_SCOPES_CREATED_COLUMN', 'created_at'),

    /**
     * If you have a custom updated_at column name, change it here.
     */
    'updated_column' => env('DATE_SCOPES_UPDATED_COLUMN', 'updated_at'),

];
