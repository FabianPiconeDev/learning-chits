Feature: Insert chit
  In order to insert a chit
  A question and an answer must be given

  Scenario: Insert chit
    When user inserts a chit
    Then the chit must be stored in the databse

  Scenario: Insert an incomplete chit
    When user inserts a chit
    And the question is missing or the answer is missing
    Then the chit must not be stored in the databse
