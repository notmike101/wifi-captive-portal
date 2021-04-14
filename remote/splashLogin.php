<?php
    /* Log variables */
    $phone = $_GET['phone'];
    $name = $_GET['name'];

    file_get_contents('./splashLog.php?phone='.$phone.'&name='.urlencode($name));

    echo 'navPage()';
?>
