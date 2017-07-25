<?php declare(strict_types=1);

namespace FabianPiconeDev\Domain\DomainEvent;

use FabianPiconeDev\Domain\Answer;
use FabianPiconeDev\Domain\Question;
use Prooph\Common\Messaging\DomainEvent;

final class ChitWasInserted extends DomainEvent
{

    private function __construct(Question $question, Answer $answer)
    {
        $this->init();
        $this->metadata['_aggregate_version'] = 1;
        $this->metadata['question'] = $question->toString();
        $this->metadata['answer'] = $answer->toString();
    }

    public static function fromQuestionAndAnswer(Question $question, Answer $answer): self
    {
        return new self($question, $answer);
    }

    public function setPayload(array $payload): void
    {
    }

    public function payload(): array
    {
        return [];
    }
}