<?php

// Get required file
require "../autoloader.php";

$message = new \Ath400\Flash\CFlash();

// Start session
session_start();

// Test setting and getting messages
$message->error('This is an error message');
$error = $message->getMessage();

$message->success('This is a success message');
$success = $message->getMessage();

$message->notice('This is a notice message');
$notice = $message->getMessage();

$message->warning('This is a warning message');
$warning = $message->getMessage();

?>

<html>
    <head>
    <link rel="stylesheet" type="text/css" href="css/flashmessage.css">
    <title>Flash message test</title>
    </head>
    <body>
    <?=$error?>
    <?=$success?>
    <?=$notice?>
    <?=$warning?>
    </body>
</html>