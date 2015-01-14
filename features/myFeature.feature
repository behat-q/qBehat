@javascript @insulated
Feature: My feature
  As a customer
  I want to be able to do action
  So i can benefit


  @old @new
  Scenario: Check if we have logo in the page
    Given I am on the homepage
    When I wait for "a.logo" element
    Then the "a.logo" element should be visible

  @old
  Scenario: Search for product
    Given I am on the homepage
    When I search for "roller"
    Then I should see "roller" in ".category-products .item"