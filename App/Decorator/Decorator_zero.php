<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace App\Decorator;

class Decorator_zero extends Decorator
{
    public function __construct(Human $human)
    {
        parent::__construct($human);
    }

    public function goHome()
    {
        var_dump('进房子。。');
    }

    public function findMap()
    {
        var_dump('书房找找Map。。');
    }

    public function wearClothes()
    {
        parent::wearClothes();
        $this->goHome();
    }

    public function walkToWhere()
    {
        parent::walkToWhere();
        $this->findMap();
    }
}
