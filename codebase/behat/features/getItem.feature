Feature: Get item
    In order to get an item
    As a partner
    I need to be able to get an item details
    Scenario: Get a product details
    Given I can scan an item barcode
    When I scan a barcode
    Then I should see the item details