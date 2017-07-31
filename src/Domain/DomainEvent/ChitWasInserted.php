<?php declare(strict_types=1);

namespace FabianPiconeDev\Domain\DomainEvent;

use FabianPiconeDev\Domain\Answer;
use FabianPiconeDev\Domain\Question;
use Prooph\Common\Messaging\DomainEvent;
use Ramsey\Uuid\Uuid;

final class ChitWasInserted extends DomainEvent
{
    private $payload;

    private function __construct(Question $question, Answer $answer)
    {
        $this->init();
        $this->metadata['_aggregate_version'] = 1;
        $this->metadata['question'] = $question->toString();
        $this->metadata['answer'] = $answer->toString();
    }

    public static function fromQuestionAndAnswer(Question $question, Answer $answer): self
    {
        return self::fromArray([
            'uuid' => Uuid::uuid4(),
            'version' => 1,
            'message_name' => __CLASS__,
            'created_at' => new \DateTimeImmutable(),
            'metadata' => [
                '_aggregate_id' => Uuid::uuid4()->toString(),
                '_aggregate_type' => 'chit',
                '_aggregate_version' => 1,
            ],
            'payload' => [
                'question' => $question->toString(),
                'answer' => $answer->toString(),
            ],
        ]);
    }

    public function setPayload(array $payload): void
    {
        $this->payload = $payload;
    }

    public function payload(): array
    {
        return $this->payload;
    }
}