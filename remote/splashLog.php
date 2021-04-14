<?php
    $host       = 'localhost';
    $username   = 'md5xtynp_splashLogger';
    $password   = '';
    $dbname     = 'md5xtynp_SplashLog';
    // Don't worry, these credentials don't work anymore

    $conn = new mysqli($host, $username, $password, $dbname);

    $name  = $conn->real_escape_string($_GET['name']);
    $phone = $conn->real_escape_string($_GET['phone']);    

    $conn->query('INSERT INTO `logger` (`fullName`, `phoneNumber`) VALUES ("'.$name.'","'.$phone.'")');
    
    $conn->close();
?>