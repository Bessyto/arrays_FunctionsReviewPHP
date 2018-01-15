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

//3.Case-insensitive function that accept a String parameter and add it to the array if it's not there
function addElements($animals, $animal)
{
    //variables
    global $animals;   //to access the array
    $counter='';
    $lowerAnimal =strtolower($animal);  //to lower case

    //if the animal to add is already in the array, counter will increase the value
    for($i = 0; $i < count($animals); $i++)
    {
        if($animals[$i] == $lowerAnimal)
        {
            $counter++;
        }
    }

    echo "Adding $animal ..... <br>";

    //if the array doesn't contain the animal, this will be added to the array
    if($counter == 0)
    {
        array_push($animals,$lowerAnimal);
    }

    //calls the function that sorts and print the array
    sortArray($animals);

}

addElements($animals,"goat");
addElements($animals, "Boa");

//PART II---------------------------------------------------------------------------------------------------------------
echo "<h3>Part II</h3>";

//Part1-Define an associative array containing key-value pairs for various cupcake flavors
$flavors = array("grasshopper" => "The Grasshopper", "maple" => "Whiskey Maple Bacon",
    "carrot" => "Carrot Walnut", "caramel" => "Salted Caramel Cupcake",
    "velvet" => "Red Velvet", "lemon" => "Lemon Drop", "tiramisu" => "Tiramisu");

//Part2- Display cupcakes options as a set of checkboxes
foreach ($flavors as $key => $value)
{
    echo "<input type='checkbox' name='flavors[]' value='$key'> $value  <br>";
}

?>