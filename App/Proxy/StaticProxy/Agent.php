<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace App\Proxy\StaticProxy;

class Agent implements StarInterface
{
    protected Star $star;

    protected bool $isBusy;

    public function __construct(Star $star, bool $isBusy)
    {
        $this->star = $star;
        $this->isBusy = $isBusy;
    }

    public function work()
    {
        // 前置处理
        if ($this->isBusy) {
            var_dump('档期满了，新电影安排到明年');
        } else {
            $this->star->work();
        }
        // 后置处理
    }

    public function live()
    {
        // 前置处理
        if ($this->isBusy) {
            var_dump('开始忙起来了，要暂停休息了');
        } else {
            $this->star->live();
        }
        // 后置处理
    }
}
