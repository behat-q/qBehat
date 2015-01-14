<?php

use Behat\Behat\Context\BehatContext;
use Behat\Behat\Context\Step;

class MyCustomContext  extends BehatContext{


    #add custom steps

    /**
     * @Then /^I search for "(?P<search_term>[^"]*)"$/
     */
    public function iSearchFor($searchTerm){
        $this->getMainContext()->iFillWith('#search', $searchTerm);
        $this->getMainContext()->iClick('#search_mini_form button');
    }
}