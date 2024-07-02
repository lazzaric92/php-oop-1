<?php 
require_once __DIR__ . "/../Models/Movie.php";
header("ContentType: application/json");
$rawData = file_get_contents("../db/movies.json");
$moviesData = json_decode($rawData, true);
$moviesArray = [];
var_dump($moviesData);
function setMovieData($dataArray, $elementsArray){
    foreach ($dataArray as $index => $movie) {
        $object = new Movie($movie["title"], $movie["language"], $movie["releaseDate"], $movie["runningTime"], $movie["rating"]);
        $elementsArray[$index] = $object;
        var_dump($index, $object);
    };
};

setMovieData($moviesData, $moviesArray);
var_dump($moviesArray);

