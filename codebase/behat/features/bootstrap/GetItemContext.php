<?php
use Behat\Behat\Tester\Exception\PendingException;
//use Behat\Behat\tester\Exception\PendingException;

class GetItemContext implements \Behat\Behat\Context\Context{
    

    /**
     * @Given I can scan an item barcode
     */
    public function iCanScanAnItemBarcode()
    {
        throw new PendingException();
    }

    /**
     * @When I scan a barcode
     */
    public function iScanABarcode()
    {
        throw new PendingException();
    }

    /**
     * @Then I should see the item details
     */
    public function iShouldSeeTheItemDetails()
    {
        throw new Exception();
    }
}
