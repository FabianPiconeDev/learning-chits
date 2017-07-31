Learning chits - CommandBus & EventSourcing
==============

Implementing
- [CommandBus](https://php-and-symfony.matthiasnoback.nl/2015/01/responsibilities-of-the-command-bus/) - [Tactician package](http://tactician.thephpleague.com/)
- [DomainEvents](https://martinfowler.com/eaaDev/DomainEvent.html)
- EventStore - [Prooph EventStore](https://github.com/prooph/event-store)
- [EventSourcing](https://docs.microsoft.com/en-us/azure/architecture/patterns/event-sourcing) - [Prooph EventSourcing](https://github.com/prooph/event-sourcing)
- Gherkin/Behat tests

- [x] Insert a chit (question/answer) over a domain event
- [ ] Get a chit from an event sourced repository
- [ ] Categorize unanswered / wrong / almost correct / correct
- [ ] Display a chit question. Show the answer toggable
- [ ] Answer the chit with wrong / almost correct / correct
- [ ] Show number of answers per chit
- [ ] Show statistics for all chits (projection)
- [ ] All tests must pass