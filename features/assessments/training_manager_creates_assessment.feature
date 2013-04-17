Feature: Training manager can create assessments
  As a training manager
  I can create an assessment
  So that I can perform interviews
  
  Scenario: only see competencies groups of the staff group I am assessing
    Given I am at the "add assessment" page
    And there are the following competencies groups:
     | name     | staff group |
     | Agile    | developers  |
     | Security | consultants |
    And I choose the "developers" staff group
    Then the list of competencies groups will not show "Security"
    And the list of competencies groups will show "Agile"