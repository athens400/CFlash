CFlash
=========
[![Build Status](https://scrutinizer-ci.com/g/athens400/cflash/badges/build.png?b=master)](https://scrutinizer-ci.com/g/athens400/cflash/build-status/master)
[![Code Coverage](https://scrutinizer-ci.com/g/athens400/cflash/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/athens400/cflash/?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/athens400/cflash/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/athens400/cflash/?branch=master)

By Daniel Svensson, athens400@hotmail.com

Set and get messages (error, success, notice, warning) in HTML div elements to/from session.
CFormAnax is an example used with the Anax framework

How to use with ANAX
-----------------------
Set the CFlash service, in your frontcontroller for instance, by including the follwing:

    $di->set('message', function() use ($di) {
        $message = new \Ath400\Flash\CFlashAnax();
        $message->setDI($di);
        return $message;
    });
    
CFlash does not start the session, you have to do that yourself.

Messages are set like so:

    $app->message->error('Some message');
    
    $app->message->success('Some message');
    
    $app->message->notice('Some message');
    
    $app->message->warning('Some message');
    
Only one message is stored at a time. Meaning you only have to get one message which, depending on user action and controller responsible for calling the message methods, will output an error, success, notice or warning message.

Get the message:

    $message = $app->message-getMessage();
    
You can also include the stylesheet located in webroot/css-folder to give the message-boxes different colors.


License
------------------

This software is free software and carries a MIT license



History
-------------------------------

v1.0.0 (2015-04-29)

* First release



```
 .  
..:  Copyright (c) 2015 Daniel Svensson, athens400@hotmail.com
```
