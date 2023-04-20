<?php

declare(strict_types=1);
/**
 * happy coding!!!
 */
namespace CommonDesignPatterns\State\Check;

interface Check
{
    public function limit(int $lastNumber): bool;
}
