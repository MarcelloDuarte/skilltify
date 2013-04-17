<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

use SensioLabs\Behat\PageObjectExtension\Context\PageObjectContext;

/**
 * Features context.
 */
class TrainingManagerContext extends PageObjectContext
{
    private $pageObject;
    
    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     *
     * @param array $parameters context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        // Initialize your context here
    }



    /**
     * @Given /^I am at the "([^"]*)" page$/
     */
    public function iAmAtThePage($page)
    {
        $this->pageObject = $this->getPage($page);
        $this->pageObject->open();
    }

    /**
     * @Given /^there are the following competencies groups:$/
     */
    public function thereAreTheFollowingCompetenciesGroups(TableNode $table)
    {
        throw new PendingException();
    }

    /**
     * @Given /^I choose the "([^"]*)" staff group$/
     */
    public function iChooseTheStaffGroup($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then /^the list of competencies groups will not show "([^"]*)"$/
     */
    public function theListOfCompetenciesGroupsWillNotShow($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given /^the list of competencies groups will show "([^"]*)"$/
     */
    public function theListOfCompetenciesGroupsWillShow($arg1)
    {
        throw new PendingException();
    }
}
