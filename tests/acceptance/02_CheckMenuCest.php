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
        $I->checkMenu();
    }

    

    

}

