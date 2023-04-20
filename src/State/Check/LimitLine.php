<?php

declare(strict_types=1);
/**
 * happy coding!!!
 */
namespace CommonDesignPatterns\State\Check;

class LimitLine
{
    private Check $check;

    public function setCheck(Check $check): void
    {
        $this->check = $check;
    }

    public function getLimitLine(int $lastNumber): bool
    {
        return $this->check->limit($lastNumber);
    }
}
