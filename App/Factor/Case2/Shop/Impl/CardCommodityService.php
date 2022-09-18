<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace App\Factor\Case2\Shop\Impl;

use App\Factor\Case2\Shop\CommodityInterface;

class CardCommodityService implements CommodityInterface
{
    public function sendCommodity(int $uid, string $prizeName, string $prizeValue): array
    {
        return [
            "测试结果[爱奇艺兑换卡【{$prizeName}】]发放成功！",
        ];
    }
}
