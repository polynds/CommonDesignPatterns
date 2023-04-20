<?php

declare(strict_types=1);
/**
 * happy coding!!!
 */
namespace CommonDesignPatterns\Composite;

abstract class ViewGroup extends View
{
    private array $children = [];

    public function addView(View $view): void
    {
        $this->children[] = $view;
    }

    public function removeView(View $view): void
    {
        $this->children = array_filter($this->children, function (View $child) use ($view) {
            return $child !== $view;
        });
    }

    public function getChildAt(int $index)
    {
        return $this->children[$index];
    }
}
