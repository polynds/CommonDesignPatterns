<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace CommonDesignPatterns\Factor\AbstractFactory\Impl;

use CommonDesignPatterns\Factor\AbstractFactory\CacheAdapter;

class RedisCacheAdapter implements CacheAdapter
{
    public function get(string $key)
    {
        return static::class . __METHOD__ . $key;
    }

    public function set(string $key, string $value)
    {
        return static::class . __METHOD__ . $key;
    }
}
