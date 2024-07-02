<?php 
class Movie {
    public $title;
    public $language;
    public $releaseDate;
    public $runningTime;
    public $rating;

    public function __construct($_title, $_lang, $_releaseDate, $_runningTime, $_rating){
        $this->title = $_title;
        $this->language = $_lang;
        $this->releaseDate = $_releaseDate;
        $this->runningTime = $_runningTime;
        $this->rating = $_rating;
    }
    public function setViewersAge($age){
        if($this->rating === "PG" || $this->rating === "PG-13"){
            if($age <= 13){
                return "Viewing is recommended in the presence of an adult.";
            };
        } elseif ($this->rating === "R"){
            if($age < 18){
                return "Prohibited for minors unaccompanied by an adult.";
            };
        } elseif ($this->rating === "NC-17"){
            if($age < 18){
                return "Adults only.";
            };
        } else {
            return "All ages admitted.";
        }
    }
}