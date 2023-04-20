<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace CommonDesignPatterns\Factor\Case1;

class Women implements PeopleInterface
{
    public function marry()
    {
        var_dump('我要穿婚纱！');
    }
}
