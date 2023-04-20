<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace CommonDesignPatterns\Builder\Case1;

class AbstractCombo
{
    protected string $name;

    protected float $amount;

    protected string $food;

    protected string $beverage;

    protected string $dessert;

    public function getName(): string
    {
        return $this->name;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function getFood(): string
    {
        return $this->food;
    }

    public function getBeverage(): string
    {
        return $this->beverage;
    }

    public function getDessert(): string
    {
        return $this->dessert;
    }
}
