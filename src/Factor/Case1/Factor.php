<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace CommonDesignPatterns\Factor\Case1;

class Factor
{
    public static function createMan(): Man
    {
        return new Man();
    }

    public static function createWomen(): Women
    {
        return new Women();
    }
}
