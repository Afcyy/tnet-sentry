<?php

define('SENTRY_LARAVEL_DSN', env('SENTRY_LARAVEL_DSN'));
define('SENTRY_TRACES_SAMPLE_RATE', env('SENTRY_TRACES_SAMPLE_RATE') ? env('SENTRY_TRACES_SAMPLE_RATE') : 0.1);
define('SENTRY_PROFILES_SAMPLE_RATE', env('SENTRY_PROFILES_SAMPLE_RATE') ? env('SENTRY_PROFILES_SAMPLE_RATE') : 0.1);