<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace App\Decorator;

use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
class DecoratorTest extends TestCase
{
    public function testDecorator()
    {
        $person = new Person();
        $decorator = new Decorator_tow(new Decorator_first(new Decorator_zero($person)));
        $decorator->wearClothes();
        $decorator->walkToWhere();
        $this->assertTrue(true);
    }
}
