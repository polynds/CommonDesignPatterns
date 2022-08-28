<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace App\Decorator;

class Decorator_tow extends Decorator
{
    public function __construct(Human $human)
    {
        parent::__construct($human);
    }

    public function findClothes()
    {
        var_dump('找到一件D&G。。');
    }

    public function findTheTarget()
    {
        var_dump('在Map上找到神秘花园和城堡。。');
    }

    public function wearClothes()
    {
        parent::wearClothes();
        $this->findClothes();
    }

    public function walkToWhere()
    {
        parent::walkToWhere();
        $this->findTheTarget();
    }
}
