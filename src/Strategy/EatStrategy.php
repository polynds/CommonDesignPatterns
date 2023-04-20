<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace CommonDesignPatterns\Strategy;

class EatStrategy implements LiveStrategyInterface
{
    public function do(): string
    {
        return '吃东西';
    }
}
