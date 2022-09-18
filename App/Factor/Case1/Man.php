<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace App\Factor\Case1;

class Man implements PeopleInterface
{
    public function marry()
    {
        var_dump('我偷偷喜欢你');
    }
}
