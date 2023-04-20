<?php

declare(strict_types=1);
/**
 * happy coding!!!
 */
namespace CommonDesignPatterns\State;

class Context
{
    private State $state;

    public function getState(): State
    {
        return $this->state;
    }

    public function setState(State $state): void
    {
        $this->state = $state;
    }
}
