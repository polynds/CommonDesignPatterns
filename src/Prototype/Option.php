<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace CommonDesignPatterns\Prototype;

class Option
{
    protected string $order;

    protected string $content;

    public function getOrder(): string
    {
        return $this->order;
    }

    public function setOrder(string $order): Option
    {
        $this->order = $order;
        return $this;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): Option
    {
        $this->content = $content;
        return $this;
    }
}
