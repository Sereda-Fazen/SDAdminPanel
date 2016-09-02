<?php
namespace Page;

use Exception;

class CheckMenu
{

    public static $URL = '/';
    public static $URL2 = '/invalid.html';
    public static $clickSearch = '//*[@class="menu-block"]//img[contains(@title,"Search")]';
    public static $seeLinkSearch = '/search';
    public static $img = '//a[@href="/search"]/img';

    public static $clickGSM =  '#_gsmMaster_index>img';
    public static $seeLinkGSM = '/gsmMaster/index';
    public static $tableLocator = '//*[@id="productTable"]//div[@class="ym-cbox"]';

    public static $clickUsers = '#_user_index>img';
    public static $seeLinkUsers = '/user/index';
    public static $tableUsers = '#new-user-form';

    public static $clickContacts = '#_manageContacts>img';
    public static $seeLinkContacts = '/manageContacts';
    public static $contactsForm = '#contacts-form';
    public static $error404 = 'h2';



    protected $tester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }

    public function mainMenuSearch()
    {
        $I = $this->tester;
        $I->click(self::$clickSearch);
        $I->seeInCurrentUrl(self::$seeLinkSearch);
        $I->see('Action',self::$tableLocator);
    }
    public function mainMenuGSMMaster()
    {
        $I = $this->tester;
        $I->click(self::$clickGSM);
        $I->seeInCurrentUrl(self::$seeLinkGSM);
        $I->see('Create Product Master',self::$tableLocator);

    }

    public function mainMenuManagerUsers()
    {
        $I = $this->tester;
        $I->click(self::$clickUsers);
        $I->seeInCurrentUrl(self::$seeLinkUsers);
        $I->seeElement(self::$tableUsers);

    }

    public function mainMenuContacts()
    {
        $I = $this->tester;
        $I->click(self::$clickContacts);
        $I->seeInCurrentUrl(self::$seeLinkContacts);
        $I->seeElement(self::$contactsForm);
    }

    public function invalidUrl($invalidURL)
    {
        $I = $this->tester;
        $I->amOnPage(self::$URL2);
        $I->waitForElement(self::$error404);
        $I->see('Error 404',self::$error404);
        $I->waitForText('Unable to resolve the request "'.$invalidURL.'".');
    }


}