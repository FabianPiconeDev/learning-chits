Feature: Answer chit

  Scenario: Answer chit wrong
    Given "correct" chit is shown
    When user answers as "wrong"
    Then the chit state must begome "wrong"

  Scenario: Answer chit almost correct
    Given "correct" chit is shown
    When user answers as "almost correct"
    Then the chit state must become "almost correct"

  Scenario: Answer chit correct
    Given "wrong" chit is shown
    When user answers as "correct"
    Then the chit state must become "correct"