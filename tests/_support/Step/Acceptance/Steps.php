<?php
namespace Step\Acceptance;

use Exception;

class Steps extends \AcceptanceTester
{

    public static $URL = '/';
    public static $clickLogIn = '//*[@name="yt0"]';
    public static $success = '.pictogram-menu';
    public static $email = '#LoginForm_username';
    public static $pass = '#LoginForm_password';
    public static $submit = '[name="send"] > span > span';

    public static $logout = '//div[@class="fright"]/ul/li[3]/a[2]';
    public static $img = '//a[@href="/search"]/img';





    public function login($email,$pass)
    {
        $I = $this;
        $I->amOnPage(self::$URL);
        $I->fillField(self::$email,$email);
        $I->fillField(self::$pass,$pass);
        $I->click(self::$clickLogIn);
        $I->waitForElement(self::$success);
        $I->waitForElement(self::$img);
        $I->seeElement(self::$success);
    }
}