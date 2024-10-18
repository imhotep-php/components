<?php declare(strict_types=1);

if (! function_exists('not_null')) {
    function not_null(mixed $value): bool
    {
        return ! is_null($value);
    }
}


if (! function_exists('value')) {
    /**
     * Return the default value of the given value.
     *
     * @param mixed $value
     * @param mixed ...$args
     * @return mixed
     */
    function value(mixed $value, ...$args): mixed
    {
        return $value instanceof Closure ? $value(...$args) : $value;
    }
}

if (!function_exists('env')) {
    /**
     * Get the available dotenv instance.
     *
     * @return mixed|Imhotep\Dotenv\Dotenv
     */
    function env(string $name, mixed $default = null): mixed
    {
        return \Imhotep\Support\Env::get($name, $default);

        return app('dotenv')->get($name, $default);
    }
}