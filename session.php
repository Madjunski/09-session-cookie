<?php
    session_start();
    if(isset($_SESSION['notification']) && $_SESSION['notification'] != NULL){
        echo($_SESSION['notification']);
    }
    unset($_SESSION['notification']);
    // session_destroy();

?>