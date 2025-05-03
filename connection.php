<?php

    $database= new mysqli("localhost","root","","npn");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>
