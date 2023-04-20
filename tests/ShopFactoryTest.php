<?php

declare(strict_types=1);
/**
 * happy coding.
 */
use CommonDesignPatterns\Factor\Case2\CommodityType;
use CommonDesignPatterns\Factor\Case2\ShopFactory;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
class ShopFactoryTest extends TestCase
{
    public function testGetCommodityService()
    {
        $this->assertSame(
            ShopFactory::getCommodityService(new CommodityType(CommodityType::Coupon_Commodity_Service))->sendCommodity(1, '全场5折', '0.5'),
            ['测试结果[优惠券【全场5折】]发放成功！']
        );
    }
}
