<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace CommonDesignPatterns\Observer;

interface Observer
{
    /**
     * 观察者更新.
     */
    public function update(Subject $subject);
}
