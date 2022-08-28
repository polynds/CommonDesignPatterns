<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace Strategy;

use App\Strategy\StrategyContext;
use App\Strategy\TYpeEnum;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
class StrategyTest extends TestCase
{
    public function testStrategy()
    {
        $this->assertStringEndsWith(StrategyContext::do(TYpeEnum::TYPE_WATCHTV), '看电视');
        $this->assertStringEndsWith(StrategyContext::do(TYpeEnum::TYPE_EAT), '吃东西');
        $this->assertStringEndsWith(StrategyContext::do(TYpeEnum::TYPE_SLEEP), '睡觉');
    }
}
