<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace App\Factor;

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
