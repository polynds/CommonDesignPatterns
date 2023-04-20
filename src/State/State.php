<?php

namespace CommonDesignPatterns\State;

interface State
{
    public function handle(Context $context): void;
}