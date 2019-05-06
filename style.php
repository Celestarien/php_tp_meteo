<?php

$date = date("d-m-Y");
$hour = date("Hi");
$display_hour = date("H:i");
if ($hour > 700 && $hour < 1900){
    echo "
    <style>
    body {
        background-color: #191970;
        color: white;
    }

    a{
        color: darkred;
    }
    </style>
    ";
}

?>