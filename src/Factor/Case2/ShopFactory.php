<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace CommonDesignPatterns\Factor\Case2;

use CommonDesignPatterns\Factor\Case2\Shop\CommodityInterface;
use CommonDesignPatterns\Factor\Case2\Shop\Impl\CardCommodityService;
use CommonDesignPatterns\Factor\Case2\Shop\Impl\CouponCommodityService;
use CommonDesignPatterns\Factor\Case2\Shop\Impl\GoodsCommodityService;
use InvalidArgumentException;

class ShopFactory
{
    public static function getCommodityService(CommodityType $commodityType): CommodityInterface
    {
        if ($commodityType->isCardCommodityService()) {
            return new CardCommodityService();
        }
        if ($commodityType->isCouponCommodityService()) {
            return new CouponCommodityService();
        }
        if ($commodityType->isGoodsCommodityService()) {
            return new GoodsCommodityService();
        }
        throw new InvalidArgumentException('不存在的商品服务类型');
    }
}
