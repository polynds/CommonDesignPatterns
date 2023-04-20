<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace CommonDesignPatterns\Builder\Case1;

class PackageContent extends AbstractCombo implements Combo
{
    public function name(string $name): PackageContent
    {
        $this->name = $name;
        return $this;
    }

    public function amount(float $amount): PackageContent
    {
        $this->amount = $amount;
        return $this;
    }

    public function stapleFood(string $food): PackageContent
    {
        $this->food = $food;
        return $this;
    }

    public function beverage(string $beverage): PackageContent
    {
        $this->beverage = $beverage;
        return $this;
    }

    public function dessert(string $dessert): PackageContent
    {
        $this->dessert = $dessert;
        return $this;
    }

    public function getDetail(): string
    {
        return PHP_EOL .
            '套餐：' . $this->getName() . PHP_EOL .
            '主食：' . $this->getFood() . PHP_EOL .
            '饮料：' . $this->getFood() . PHP_EOL .
            '甜点：' . $this->getFood() . PHP_EOL .
            '价格：' . $this->getAmount() . PHP_EOL;
    }
}
