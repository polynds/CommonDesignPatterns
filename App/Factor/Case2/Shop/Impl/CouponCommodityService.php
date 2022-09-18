<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace App\Factor\Case2\Shop\Impl;

use App\Factor\Case2\Shop\CommodityInterface;

class CouponCommodityService implements CommodityInterface
{
    public function sendCommodity(int $uid, string $prizeName, string $prizeValue): array
    {
        return [
            "测试结果[优惠券【{$prizeName}】]发放成功！",
        ];
    }
}
