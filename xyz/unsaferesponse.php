<?php

$fileName = str_replace($blacklist, " ", $fileName);


    $fileName = $_POST['fileName'];

    system("echo $fileName", $val);

    if ($val == 0) {

        echo("Hello $fileName");

    } else {

        echo ("Whoops, something is not right");

    }

?>