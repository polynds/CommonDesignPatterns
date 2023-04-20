<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace CommonDesignPatterns\Decorator;

class Decorator_first extends Decorator
{
    public function __construct(Human $human)
    {
        parent::__construct($human);
    }

    public function goClothesPress()
    {
        var_dump('去衣柜找找看。。');
    }

    public function findPlaceOnMap()
    {
        var_dump('在Map上找找。。');
    }

    public function wearClothes()
    {
        parent::wearClothes();
        $this->goClothesPress();
    }

    public function walkToWhere()
    {
        parent::walkToWhere();
        $this->findPlaceOnMap();
    }
}
