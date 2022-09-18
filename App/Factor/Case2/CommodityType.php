<?php

declare(strict_types=1);

/**
 * happy coding.
 */
namespace App\Factor\Case2;

class CommodityType
{
    public const Card_Commodity_Service = 1;

    public const Coupon_Commodity_Service = 2;

    public const Goods_Commodity_Service = 3;

    protected int $type;

    public function __construct(int $type)
    {
        $this->type = $type;
    }

    public function isCardCommodityService(): bool
    {
        return $this->type === self::Card_Commodity_Service;
    }

    public function isCouponCommodityService(): bool
    {
        return $this->type === self::Coupon_Commodity_Service;
    }

    public function isGoodsCommodityService(): bool
    {
        return $this->type === self::Goods_Commodity_Service;
    }
}
