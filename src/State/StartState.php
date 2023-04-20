<?php

declare(strict_types=1);
/**
 * happy coding!!!
 */
namespace CommonDesignPatterns\State;

class StartState implements State
{
    public function __toString()
    {
        return 'StartState';
    }

    public function handle(Context $context): void
    {
        var_dump('Player is in start state');
        $context->setState($this);
    }
}
