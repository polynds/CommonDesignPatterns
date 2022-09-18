<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace App\Factor;

use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
class FactorTest extends TestCase
{
    public function testCase1Factor()
    {
        $man = Case1\Factor::createMan();
        $man->marry();
        $women = Case1\Factor::createWomen();
        $women->marry();

        $this->assertTrue(true);
    }
}
