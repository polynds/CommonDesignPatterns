<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace App\Strategy;

class WatchTvStrategy implements LiveStrategyInterface
{
    public function do(): string
    {
        return '看电视';
    }
}
