<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace App\Builder\Case1;

class Builder
{
    public function comboA(): string
    {
        return (new PackageContent())
            ->name('疯狂星期四')
            ->amount(27.5)
            ->dessert('330ml 可乐')
            ->beverage('草莓圣代')
            ->stapleFood('四川香辣堡')
            ->getDetail();
    }

    public function comboB(): string
    {
        return (new PackageContent())
            ->name('庆祝中秋节')
            ->amount(7.7)
            ->dessert('月饼味可乐')
            ->beverage('巧克力奶昔')
            ->stapleFood('蛋黄月饼')
            ->getDetail();
    }

    public function comboC(): string
    {
        return (new PackageContent())
            ->name('欢乐国庆')
            ->amount(6.5)
            ->dessert('卡布奇洛')
            ->beverage('草莓圣代')
            ->stapleFood('全家桶')
            ->getDetail();
    }
}
