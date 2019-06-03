<?php
session_start(); //functie

function is_assoc($arr)
{
    return array_keys($arr) !== range(0, count($arr) - 1);

}

$music = array("hardrock", "pop", "country");
$_SESSION["simpleArray"] = $music; //iterable maken van arrays

$instrument = array("hardrock" => "elektrische gitaar", "pop" => "gitaar", "country" => "steelgitaar");
$_SESSION["assocArray"] = $instrument;

class MusicStyle
{
    //create a property
    public $techno = "bass";

    // this is now a property

}
//For loop that adds an element

$object = new MusicStyle;
$_SESSION["object"] = $object;
foreach ($_SESSION as $member) {
    if (is_array($member)) {
        if (is_assoc($member)) {
            $member['key'] = "iets"; //assoc. array
        } else {
            array_push($member, "iets");

        } // aan assoc. array toevoegen

    }
    if (is_object($member)) {
        $member->key = "iets";

    }

    echo "<pre>";
    print_r($member);
    echo "</pre>";
    print_r($member);

}

echo "</br>";
//loop for all

//chance calculation of 20%
$randIndex = (rand(0, count($music) * 5));
if ($music[$randIndex] !== null) {
    // array_key_exists($randIndex, $music);
    echo $music[$randIndex];

}
;

echo "</br>";
// if($ % 2 !== 0)// is odd

$len = count($music);
echo $len;

// $firsthalf = array_slice($input, 0, $len / 2);
// $secondhalf = array_slice($input, $len / 2);

echo "</br>";
//remove item of assoc array
unset($instrument["country"]);
print_r($instrument);

echo "</br>";

$arr1 = $music;
$arr2 = $instrument;
$object->Pablo = $arr1; //in object voeg ik key toe
$object->Pablo1 = $arr2;
var_dump($object);

echo "</br>";
//Loop through the associative array adding all items to the object as key => value
foreach ($instrument as $value) {
    $object->Pablo1 = $value;
    var_dump($object);
}
;

setcookie("mainCookie", $object);
var_dump(mainCookie);

echo "</br>";

//readable way
echo "<pre>";
print_r($object);
echo "</pre>";
