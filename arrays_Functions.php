<?php
/*
 * Bessy Torres-Miller
 * IT-328
 * Functions and Arrays PHP review
 */

//Error reporting
ini_set('display_error' ,1);
error_reporting(E_ALL);

//PART I----------------------------------------------------------------------------------------------------------------
echo "<H3>Part I</H3>";

//1.Define an array
$animals = array("panda", "alpaca", "boa");

//2.Sort array and print it
function sortArray($animals)
{
    sort($animals); //sort alphabetically
    foreach ($animals as $key => $value)  //foreach to get key and value
    {
        echo "$value ";
    }
    echo "<br>";
}
sortArray($animals);