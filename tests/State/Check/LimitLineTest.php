<?php

declare(strict_types=1);
/**
 * happy coding!!!
 */
namespace State\Check;

use CommonDesignPatterns\State\Check\LimitLine;
use CommonDesignPatterns\State\Check\Mondy;
use CommonDesignPatterns\State\Check\Tuesday;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
class LimitLineTest extends TestCase
{
    public function testLimitLine()
    {
        $monday = new Mondy();
        $tuesday = new Tuesday();
        $limitLine = new LimitLine();

        $limitLine->setCheck($monday);
        $this->assertTrue($limitLine->getLimitLine(1));
        $this->assertFalse($limitLine->getLimitLine(2));

        $limitLine->setCheck($tuesday);
        $this->assertFalse($limitLine->getLimitLine(1));
        $this->assertTrue($limitLine->getLimitLine(2));
    }
}
