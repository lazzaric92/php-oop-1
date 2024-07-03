<?php 
require_once __DIR__ . "/../Classes/Movie.php";
// header("ContentType: application/json");
$rawData = file_get_contents("../db/movies.json");
$moviesData = json_decode($rawData, true);
// var_dump($moviesData);
$moviesArray = [];

/**
 * Function to create a Movie instance with data from an array
 *
 * @param array $dataArray array in which every element is a movie
 * @param string $titleProperty title of the movie
 * @param string $languageProperty language of the movie
 * @param int $releaseDateProperty year in which the movie has been released
 * @param int $runningTimeProperty movie duration in minutes
 * @param string $ratingProperty content rating system, based on US standards
 * @param array $newInstancesArray array in which newly created instances are pushed
 * @return void
 */
function createMovieInstance($dataArray, $titleProperty, $languageProperty, $releaseDateProperty, $runningTimeProperty, $ratingProperty, $newInstancesArray){
    for ($i=0; $i < count($dataArray); $i++) { 
        $movie = $dataArray[$i];
        $object = new Movie($movie[$titleProperty], $movie[$languageProperty], $movie[$releaseDateProperty], $movie[$runningTimeProperty], $movie[$ratingProperty]);
        $newInstancesArray[$i] = $object;
    };
    var_dump($newInstancesArray);
};

createMovieInstance($moviesData, "title", "language", "releaseDate", "runningTime", "rating", $moviesArray);
var_dump($moviesArray);

