<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace CommonDesignPatterns\Proxy\StaticProxy;

class Star implements StarInterface
{
    public function work()
    {
        var_dump('开始拍戏');
    }

    public function live()
    {
        var_dump('好好享受生活');
    }
}
