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
    public function testFactor()
    {
        $man = Factor::createMan();
        $man->marry();
        $women = Factor::createWomen();
        $women->marry();

        $this->assertTrue(true);
    }
}
