<?php

declare(strict_types=1);
/**
 * happy coding!!!
 */
namespace State;

use CommonDesignPatterns\State\Context;
use CommonDesignPatterns\State\StartState;
use CommonDesignPatterns\State\StopState;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

/**
 * @internal
 * @coversNothing
 */
class StateTest extends TestCase
{
    public function testState()
    {
        $context = new Context();
        $startState = new StartState();
        $startState->handle($context);
        assertEquals('StartState', $context->getState());

        $stopState = new StopState();
        $stopState->handle($context);
        assertEquals('StopState', $context->getState());
    }
}
