<?php

/**
 * Created by PhpStorm.
 * User: moeshaw
 * Date: 26/08/16
 * Time: 1:57 PM
 */
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Remote\WebDriverCapabilityType;
use Facebook\WebDriver\WebDriverBy;


class test extends PHPUnit_Framework_TestCase
{

    protected $webDriver;

    protected $url = 'http://status.phx.dev.northamericanbancard.com/' ;

    public function setUp()

    {

        $capabilities = array(WebDriverCapabilityType::BROWSER_NAME=>'chrome');

        $this->webDriver = RemoteWebDriver::create('http://localhost:4444/wd/hub', $capabilities);

    }

    public function tearDown()

    {

        $this->webDriver->quit();

    }

    public function testGoToHybridAndLogin()

    {

        $this->webDriver->get($this->url);

        $this->assertContains('System :: Login', $this->webDriver->getTitle());

        $this->typeLogin();

    }

    public function typeLogin()

    {

        $form = $this->webDriver->findElement(WebDriverBy::id('ctl0_Main_ctl0'));

        $this->webDriver->findElement(WebDriverBy::id('ctl0_Main_Username'))->sendKeys('PHXDEVCSR1');

        $this->webDriver->findElement(WebDriverBy::id('ctl0_Main_Password'))->sendKeys('ph0en1xDev!');

        $form->submit();

    }

}