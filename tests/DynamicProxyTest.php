<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace App\Proxy\DynamicProxy;

use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
class DynamicProxyTest extends TestCase
{
    public function testDynamicProxy()
    {
        $proxy = new Proxy(TargetClass::class);
        $proxy->do();
        $this->assertTrue(true);
    }
}
