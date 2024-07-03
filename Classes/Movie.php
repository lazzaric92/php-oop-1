<?php 
class Movie {
    private $title;
    private $language;
    private $releaseDate;
    private $runningTime;
    private $rating;

    public function __construct($_title, $_lang, $_releaseDate, $_runningTime, $_rating){
        $this->title = $_title;
        $this->language = $_lang;
        $this->releaseDate = $_releaseDate;
        $this->runningTime = $_runningTime;
        $this->rating = $_rating;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setTitle($_title){
        return $this->title = $_title;
    }

    public function getLanguage(){
        return $this->language;
    }

    public function setLanguage($_lang){
        return $this->language = $_lang;
    }

    public function getReleaseDate(){
        return $this->releaseDate;
    }

    public function setReleaseDate($_releaseDate){
        return $this->releaseDate = $_releaseDate;
    }

    public function getRunningTime(){
        return $this->runningTime;
    }

    public function setRunningTime($_runningTime){
        return $this->runningTime = $_runningTime;
    }

    public function getRating(){
        return $this->rating;
    }

    public function setRating($_rating){
        return $this->rating = $_rating;
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