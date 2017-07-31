<?php declare(strict_types=1);

namespace FabianPiconeDev\Domain\Command;

final class InsertChitCommand
{
    private $question;
    private $answer;

    private function __construct(string $question, string $answer)
    {
        $this->question = $question;
        $this->answer = $answer;
    }

    public static function fromQuestionAndAnswer(string $question, string $answer): self
    {
        return new self($question, $answer);
    }

    public function getQuestion(): string
    {
        return $this->question;
    }

    public function getAnswer(): string
    {
        return $this->answer;
    }
}