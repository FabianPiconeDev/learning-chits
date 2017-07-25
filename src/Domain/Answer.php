<?php declare(strict_types=1);

namespace FabianPiconeDev\Domain;

final class Answer
{
    private $answer;

    private function __construct(string $answer)
    {
        $this->answer = $answer;
    }

    public static function new(string $answer): self
    {
        return new self($answer);
    }

    public function toString(): string
    {
        return $this->answer;
    }
}