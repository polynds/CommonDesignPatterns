<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace App\Proxy\StaticProxy;

use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
class AgentTest extends TestCase
{
    public function testAgent()
    {
        $star = new Star();
        $agent = new Agent($star, false);

        $agent->work();
        $agent->live();
        $this->assertTrue(true);
    }
}
