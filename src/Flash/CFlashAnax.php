<?php

namespace Ath400\Flash;

/**
 * Example for ANAX
 * Store messages for use as user feedback
 * Session must be started elsewhere
 *
 */
class CFlashAnax extends CFlash implements \Anax\DI\IInjectionAware
{
    use \Anax\DI\TInjectable;
    
    public function setMessage($message = null)
    {
            $this->session->set('flash-message', $message);
    }
    
    /**
     * Get message
     *
     * @return string message;
     */
    public function getMessage()
    {
        $message = $this->session->get('flash-message');
        $this->setMessage();
        return $message;
    } 
}