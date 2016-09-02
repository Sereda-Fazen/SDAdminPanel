<?php
use \Step\Acceptance;

/**
 * @group menu
 */
class CheckMenuCest
{

    function checkMenu( \Page\CheckMenu $menu,\Step\Acceptance\Steps $I)
    {
        $I->login('yvikajvd@grandmasmail.com','123456789');
        $menu->mainMenuSearch();
        $menu->mainMenuGSMMaster();
        $menu->mainMenuManagerUsers();
        $menu->mainMenuContacts();
        $menu->invalidUrl('invalid.html');
    }

    

    

}

