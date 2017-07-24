<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use League\Tactician\CommandBus;
use FabianPiconeDev\Domain\Command\InsertChitCommand;
use Prooph\EventStore\EventStore;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    private $commandBus;
    private $eventStore;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct(Commandbus $commandBus, EventStore $eventStore)
    {
        $this->commandBus = $commandBus;
        $this->eventStore = $eventStore;
    }

    /**
     * @Given :arg1 chit is shown
     */
    public function chitIsShown($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When user answers as :arg1
     */
    public function userAnswersAs($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then the chit state must begome :arg1
     */
    public function theChitStateMustBegome($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then the chit state must become :arg1
     */
    public function theChitStateMustBecome($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then the chit must be stored in the databse
     */
    public function theChitMustBeStoredInTheDatabse()
    {
        throw new PendingException();
    }

    /**
     * @When the question is missing or the answer is missing
     */
    public function theQuestionIsMissingOrTheAnswerIsMissing()
    {
        throw new PendingException();
    }

    /**
     * @Then the chit must not be stored in the databse
     */
    public function theChitMustNotBeStoredInTheDatabse()
    {
        throw new PendingException();
    }

    /**
     * @Given a chit is shown
     */
    public function aChitIsShown()
    {
        throw new PendingException();
    }

    /**
     * @Then the number of answers of the chit must be :arg1
     */
    public function theNumberOfAnswersOfTheChitMustBe($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given :arg1 chit is in the database
     */
    public function chitIsInTheDatabase($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When user navigates to :arg1 chits
     */
    public function userNavigatesToChits($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then an :arg1 chit must be shown
     */
    public function anChitMustBeShown($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given there is a chit :arg1 answered :arg2
     */
    public function thereIsAChitAnswered($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @When user loads the statistics
     */
    public function userLoadsTheStatistics()
    {
        throw new PendingException();
    }

    /**
     * @Then the statistics must be :arg1 wrong
     */
    public function theStatisticsMustBeWrong($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then :arg1 almost correct
     */
    public function almostCorrect($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then :arg1 correct
     */
    public function correct($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given chit is shown
     */
    public function chitIsShown2()
    {
        throw new PendingException();
    }

    /**
     * @When user inserts a chit
     */
    public function userInsertsAChit()
    {
        $this->commandBus->handle(new InsertChitCommand);
    }
}
