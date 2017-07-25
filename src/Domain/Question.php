<?php declare(strict_types=1);

namespace FabianPiconeDev\Domain;

final class Question
{
    private $question;

    private function __construct(string $question)
    {
        $this->question = $question;
    }

    public static function new(string $question): self
    {
        return new self($question);
    }

    public function toString(): string
    {
        return $this->question;
    }
}