<?php

    $host = 'localhost';
    $db = '09-session-cookie';
    $user = 'root';
    $password = 'root';

    $bdd = new PDO('mysql:host=' . $host . ';dbname=' . $db . '; charset=utf8', $user, $password);
    
?>