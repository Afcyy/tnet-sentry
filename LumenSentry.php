<?php

namespace TnetSentry;

use Throwable;
use function Sentry\captureException;
use function Sentry\init;

class LumenSentry
{
    public function report(Throwable $exception)
    {
        if (app()->bound('sentry') && $this->shouldReport($exception)) {
            app('sentry')->captureException($exception);
        }

        parent::report($exception);
    }
}