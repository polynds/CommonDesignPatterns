<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace App\Decorator;

class Person implements Human
{
    public function wearClothes()
    {
        var_dump('穿什么呢。。');
    }

    public function walkToWhere()
    {
        var_dump('去哪里呢。。');
    }
}
