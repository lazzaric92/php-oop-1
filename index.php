<?php 
require_once __DIR__ . "/db.php";
require_once __DIR__ . "/Models/Movie.php";

$theNeverEndingStory = new Movie("The NeverEnding Story", "ENG", "1984", "94", "G");
$watchmen = new Movie("Watchmen", "ENG", "2009", "163", "R");

var_dump($theNeverEndingStory, $watchmen);

echo $watchmen->setViewersAge(13);
?>
