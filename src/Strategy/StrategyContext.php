<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace CommonDesignPatterns\Strategy;

use Exception;

class StrategyContext
{
    public static function do(string $type): string
    {
        switch ($type) {
            case TYpeEnum::TYPE_SLEEP:
                $strategy = new SleepStrategy();
                break;
            case TYpeEnum::TYPE_WATCHTV:
                $strategy = new WatchTvStrategy();
                break;
            case TYpeEnum::TYPE_EAT:
                $strategy = new EatStrategy();
                break;
            default:
                throw new Exception('匹配失败');
        }
        return $strategy->do();
    }
}
