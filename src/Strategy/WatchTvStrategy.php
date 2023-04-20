<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace CommonDesignPatterns\Strategy;

class WatchTvStrategy implements LiveStrategyInterface
{
    public function do(): string
    {
        return '看电视';
    }
}
