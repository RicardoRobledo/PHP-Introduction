<?php

    header("Content-Type: text/plain");
    header("Expires: Tue, 02 Jul 2024 05:30:00 GMT"); //To set the expiration time of a document
    header("Location: http://www.megamanxcorrupted.com/");
    exit();


    $pageAccesses = $_COOKIE['accesses'];
    setcookie('accesses', ++$pageAccesses);
    echo $_COOKIE['accesses'];

    // ---------------------------------------------------

    session_start();
    $_SESSION['user'] = 'PHPUser';

?>