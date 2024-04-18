<?php

function env($key, $default = null) {
    static $env;
    if (!$env) {
        $env = parse_ini_file(__DIR__ . '/.env', true);
    }
    if (isset($env[$key])) {
        return $env[$key];
    }
    return $default;
}