<?php
    session_start();
    session_destroy();

    
    setcookie('logged_in', true, time()-1, '/');
    setcookie('email', $email, time()-1, '/');

    header('location: ../view/logIn.php');

?>