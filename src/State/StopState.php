<?php

declare(strict_types=1);
/**
 * happy coding!!!
 */
namespace CommonDesignPatterns\State;

class StopState implements State
{
    public function __toString()
    {
        return 'StopState';
    }

    public function handle(Context $context): void
    {
        var_dump('Player is in stop state');
        $context->setState($this);
    }
}
