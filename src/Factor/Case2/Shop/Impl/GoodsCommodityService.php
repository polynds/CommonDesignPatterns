<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace CommonDesignPatterns\Factor\Case2\Shop\Impl;

use CommonDesignPatterns\Factor\Case2\Shop\CommodityInterface;

class GoodsCommodityService implements CommodityInterface
{
    public function sendCommodity(int $uid, string $prizeName, string $prizeValue): array
    {
        return [
            "测试结果[实物商品【{$prizeName}】]发放成功！",
        ];
    }
}
