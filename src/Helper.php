<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

if (! function_exists('present')) {
    function present(bool $asString = false): Carbon|string
    {
        $now = Carbon::now(config('foundation.timezone', 'Asia/Singapore'));

        return $asString ? $now->format(config('foundation.datetime_format', 'd-m-Y H:i:s')) : $now;
    }
}

if (! function_exists('local_time')) {
    function local_time(Carbon|string $datetimeString, bool $asString = false, ?string $timezone = null, ?string $format = null): Carbon|string
    {
        $timezone = $timezone ?? config('foundation.timezone', 'Asia/Singapore');

        $format = $format ?? config('foundation.datetime_format', 'd-m-Y H:i:s');

        try {
            $datetime = Carbon::parse($datetimeString);
        } catch (\Exception $exception) {

            log_warning($exception->getMessage());

            $datetime = Carbon::now();
        }

        $datetime->tz($timezone);

        return $asString ? $datetime->format($format) : $datetime;
    }
}

if (! function_exists('log_debug')) {
    /**
     * Debug (level 100): Detailed debug information.
     */
    function log_debug(string $message, array $data = []): void
    {
        write_to_log($message, $data, 'debug');
    }
}

if (! function_exists('log_info')) {
    /**
     * Info (level 200): Interesting events. General operational entries about what's happening inside the application.
     *
     * @param  array|null  $data
     */
    function log_info(string $message, array $data = []): void
    {
        write_to_log($message, $data, 'info');
    }
}

if (! function_exists('log_notice')) {
    /**
     * Notice (level 250): Normal but significant events.
     *
     * @param  array|null  $data
     */
    function log_notice(string $message, array $data = []): void
    {
        write_to_log($message, $data, 'notice');
    }
}

if (! function_exists('log_warning')) {
    /**
     * Warning (level 300): Exceptional occurrences that are not errors.
     *
     * @param  array|null  $data
     */
    function log_warning(string $message, array $data = []): void
    {
        write_to_log($message, $data, 'warning');
    }
}

if (! function_exists('log_error')) {
    /**
     * Error (level 400): Runtime errors that do not require immediate action but should be monitored.
     *
     * @param  array|null  $data
     */
    function log_error(string $message, array $data = []): void
    {
        write_to_log($message, $data, 'error');
    }
}

if (! function_exists('log_critical')) {
    /**
     * Critical (level 500): Critical conditions.
     */
    function log_critical(string $message, array $data = []): void
    {
        write_to_log($message, $data, 'critical');
    }
}

if (! function_exists('log_alert')) {
    /**
     * Alert (level 550): Action must be taken immediately.
     */
    function log_alert(string $message, array $data = []): void
    {
        write_to_log($message, $data, 'alert');
    }
}

if (! function_exists('log_emergency')) {
    /**
     * Emergency (level 600): System is unusable.
     */
    function log_emergency(string $message, array $data = []): void
    {
        write_to_log($message, $data, 'emergency');
    }
}

if (! function_exists('write_to_log')) {

    function write_to_log(string $message, array $data = [], string $level = 'debug'): void
    {
        Log::$level($message, $data);
    }
}
