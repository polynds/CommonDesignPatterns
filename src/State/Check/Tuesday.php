<?php

declare(strict_types=1);
/**
 * happy coding!!!
 */
namespace CommonDesignPatterns\State\Check;

class Tuesday implements Check
{
    public function limit(int $lastNumber): bool
    {
        return $lastNumber === 2 || $lastNumber === 7;
    }
}
