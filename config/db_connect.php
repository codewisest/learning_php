<?php
    $user = 'wisestme';
    $password = 'dummy1234';
    $db = 'pizza_domain';
    $host = 'localhost';
    $port = 8889;
    
    $link = mysqli_init();
    $success = mysqli_real_connect(
       $link,
       $host,
       $user,
       $password,
       $db,
       $port
    );

    // check connection
    if(!$success) {
        echo 'Connection error: ' . mysqli_connect_error();
    }
?>