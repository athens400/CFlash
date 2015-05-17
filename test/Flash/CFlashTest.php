<?php

namespace Ath400\Flash;

/**
 * Testclass for CFlash
 *
 */
class CFlashTest extends \PHPUnit_Framework_TestCase
{
    
    private $flash;
    
    public function __construct()
    {
        $this->flash = new \Ath400\Flash\CFlash;
    }
    
    public function testError()
    {
        $message = "test";
        $expected = "<div class='flash-error-message'>{$message}</div>";
        $this->flash->error($message);
        $result = $this->flash->getMessage();
        $this->assertEquals($result, $expected, "Set message doesn't match");
    }
    
    public function testSuccess()
    {
        $message = "test";
        $expected = "<div class='flash-success-message'>{$message}</div>";
        $this->flash->success($message);
        $result = $this->flash->getMessage();
        $this->assertEquals($result, $expected, "Set message doesn't match");
    }
    
    public function testNotice()
    {
        $message = "test";
        $expected = "<div class='flash-notice-message'>{$message}</div>";
        $this->flash->notice($message);
        $result = $this->flash->getMessage();
        $this->assertEquals($result, $expected, "Set message doesn't match");
    }
    
    public function testWarning()
    {
        $message = "test";
        $expected = "<div class='flash-warning-message'>{$message}</div>";
        $this->flash->warning($message);
        $result = $this->flash->getMessage();
        $this->assertEquals($result, $expected, "Set message doesn't match");
    }
}