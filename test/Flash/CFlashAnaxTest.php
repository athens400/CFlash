<?php

namespace Ath400\Flash;

/**
 * Testclass for CFlashAnax
 *
 */
class CFlashAnaxTest extends \PHPUnit_Framework_TestCase
{
    
    public function __construct()
    {
    }
    
    public function testSetMessage()
    {
        $flash = new \Ath400\Flash\CFlashAnax;
        $di    = new \Anax\DI\CDIFactoryDefault();
        $flash->setDI($di);
        
        $di->setShared('session', function () {
            $session = new \Anax\Session\CSession();
            $session->configure(ANAX_APP_PATH . 'config/session.php');
            $session->name();
            //$session->start();
            return $session;
        });
        
        $expected = "test";
        $flash->setMessage($expected);
        $result = $flash->getMessage();
        $this->assertEquals($result, $expected, "Set message doesn't match");
    }
}