<?php

declare(strict_types=1);
/**
 * happy coding!!!
 */
namespace CommonDesignPatterns\State\Check;

class Mondy implements Check
{
    public function limit(int $lastNumber): bool
    {
        return $lastNumber === 1 || $lastNumber === 6;
    }
}
