<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
$myObj->name = "Adeyemi Timilehin Mike";
$myObj->ID = "02251";
$myObj->language = "php";
$myObj->Email="adeyemitimmy@gmail.com"
$name="Adeyemi Timilehin Mike";
$email="adeyemitimmy@gmail.com";
$id="02251";
$language="php";
$myJSON = json_encode($myObj);

echo $myJSON;

echo "\nHello world,this is $name with HNG i7 ID $id using $language for stage 2

flush();
?>
