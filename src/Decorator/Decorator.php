<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace CommonDesignPatterns\Decorator;

/**
 * 装饰者.
 */
abstract class Decorator implements Human
{
    private Human $human;

    public function __construct(Human $human)
    {
        $this->human = $human;
    }

    public function wearClothes()
    {
        $this->human->wearClothes();
    }

    public function walkToWhere()
    {
        $this->human->walkToWhere();
    }
}
