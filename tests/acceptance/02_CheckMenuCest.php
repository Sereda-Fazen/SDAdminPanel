<?php
use \Step\Acceptance;

/**
 * @group menu
 */
class CheckMenuCest
{

    function mainMenuSearch( \Page\CheckMenu $menu,\Step\Acceptance\Steps $I)
    {
        $I->login('yvikajvd@grandmasmail.com', '123456789');
        $menu->mainMenuSearch();
    }
    function mainMenuGSMMaster( \Page\CheckMenu $menu,\Step\Acceptance\Steps $I)
    {
        $menu->mainMenuGSMMaster();
    }
    function mainMenuManagerUsers( \Page\CheckMenu $menu,\Step\Acceptance\Steps $I)
    {
        $menu->mainMenuManagerUsers();
    }
    function mainMenuContacts( \Page\CheckMenu $menu,\Step\Acceptance\Steps $I)
    {
        $menu->mainMenuContacts();
    }
    function checkInvalidUrl( \Page\CheckMenu $menu,\Step\Acceptance\Steps $I)
    {
        $menu->invalidUrl('invalid.html');
    }

    

    

}

