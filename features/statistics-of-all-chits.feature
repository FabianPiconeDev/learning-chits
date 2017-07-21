Feature: Statistics of all chits

  Scenario: Show statistics of all chits
    Given there is a chit "a" answered wrong
    And there is a chit "b" answered wrong
    And there is a chit "c" answered almost correct
    And there is a chit "d" answered correct
    And there is a chit "e" answered correct
    And there is a chit "f" answered correct
    When user loads the statistics
    Then the statistics must be 2 wrong
    And 1 almost correct
    And 3 correct