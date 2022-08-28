<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace App\Strategy;

class SleepStrategy implements LiveStrategyInterface
{
    public function do(): string
    {
        return '睡觉';
    }
}
