<?php

    session_start();
    
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    if ($email === 'nyiminkx01@gmail.com' && $password === 'nmk123@') {
        $_SESSION['user'] = ['username' => 'nyi min khant'];
        header('location: ../profile.php');
    } else {
        header('location: ../index.php?incorrect=1');
    }