Feature: Number of answers of a chit

  Scenario: Answer chit 2 times
    Given chit is shown
    When user answers as "wrong"
    And user answers as "almost correct"
    Then the number of answers of the chit must be "2"