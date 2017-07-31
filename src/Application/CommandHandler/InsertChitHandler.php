<?php declare(strict_types=1);

namespace FabianPiconeDev\Application\CommandHandler;

use FabianPiconeDev\Domain\Answer;
use FabianPiconeDev\Domain\Command\InsertChitCommand;
use FabianPiconeDev\Domain\DomainEvent\ChitWasInserted;
use FabianPiconeDev\Domain\Question;
use Prooph\EventStore\EventStore;
use Prooph\EventStore\StreamName;

final class InsertChitHandler
{
    private $eventStore;
    private $streamName = 'event_stream';

    public function __construct(EventStore $eventStore)
    {
        $this->eventStore = $eventStore;
    }

    public function handle(InsertChitCommand $command): void
    {
        $this->eventStore->appendTo(new StreamName($this->streamName), new \ArrayIterator([
            ChitWasInserted::fromQuestionAndAnswer(
                Question::new($command->getQuestion()),
                Answer::new($command->getAnswer())
            )
        ]));
    }
}