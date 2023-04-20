<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace CommonDesignPatterns\Builder\Case1;

interface Combo
{
    public function name(string $name);

    public function amount(float $amount);

    public function stapleFood(string $food);

    public function beverage(string $beverage);

    public function dessert(string $dessert);

    public function getDetail(): string;
}
