<?php
include ("functions.php");


$ISOCodes = $client->ISOCodes();

foreach ($ISOCodes->ISOCodesResult->string as $codes){
    $ISO[]=$codes;
}

include ('main.html.php');