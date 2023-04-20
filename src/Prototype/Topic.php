<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace CommonDesignPatterns\Prototype;

class Topic
{
    protected string $title;

    /**
     * @var Option[]
     */
    protected array $options;

    protected string $answer;

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): Topic
    {
        $this->title = $title;
        return $this;
    }

    public function getOptions(): array
    {
        return $this->options;
    }

    public function addOptions(Option $option): Topic
    {
        $this->options[] = $option;
        return $this;
    }

    public function getAnswer(): string
    {
        return $this->answer;
    }

    public function setAnswer(string $answer): Topic
    {
        $this->answer = $answer;
        return $this;
    }
}
