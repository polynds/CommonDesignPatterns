<?php

declare(strict_types=1);
/**
 * happy coding!!!
 */
namespace CommonDesignPatterns\Composite;

class View
{
    public function render(string $string): void
    {
        var_dump($string . '已完成渲染');
    }
}
