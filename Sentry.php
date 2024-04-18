<?php

namespace TnetSentry;

use function Sentry\captureException;
use function Sentry\init;

class Sentry
{
    public static function init() {
        init([
            'dsn' => SENTRY_LARAVEL_DSN,
            'traces_sample_rate' => SENTRY_TRACES_SAMPLE_RATE,
            'profiles_sample_rate' => SENTRY_PROFILES_SAMPLE_RATE,
        ]);

        self::SetExceptionHandler();
    }

    private static function SetExceptionHandler() {
        set_exception_handler(function (\Throwable $exception) {
            captureException($exception);
        });
    }
}