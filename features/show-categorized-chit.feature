Feature: Show categorized chit

  Scenario: Show unanswered chit
    Given "unanswered" chit is in the database
    When user navigates to "unanswered" chits
    Then an "unanswered" chit must be shown

  Scenario: Show wrong chit
    Given "wrong" chit is in the database
    When user navigates to "wrong" chits
    Then an "wrong" chit must be shown

  Scenario: Show almost correct chit
    Given "almost correct" chit is in the database
    When user navigates to "almost correct" chits
    Then an "almost correct" chit must be shown

  Scenario: Show correct chit
    Given "correct" chit is in the database
    When user navigates to "correct" chits
    Then an "correct" chit must be shown