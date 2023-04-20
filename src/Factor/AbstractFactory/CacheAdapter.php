<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace CommonDesignPatterns\Factor\AbstractFactory;

interface CacheAdapter
{
    public function get(string $key);

    public function set(string $key, string $value);
}
