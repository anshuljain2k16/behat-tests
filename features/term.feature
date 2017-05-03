@api
Feature: Login User
  Scenario: Login with user
   Given I am logged in as a user with the "authenticated user" role
   When I click "My account"
   Then I should see the heading "History"
