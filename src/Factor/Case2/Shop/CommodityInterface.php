<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace CommonDesignPatterns\Factor\Case2\Shop;

interface CommodityInterface
{
    public function sendCommodity(int $uid, string $prizeName, string $prizeValue): array;
}
