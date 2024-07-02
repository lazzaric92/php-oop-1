<?php 
class Movie {
    public $title;
    public $language;
    public $releaseDate;
    public $runningTime;

    public function __construct($_title, $_lang, $_releaseDate, $_runningTime){
        $this->title = $_title;
        $this->language = $_lang;
        $this->releaseDate = $_releaseDate;
        $this->runningTime = $_runningTime;
    }

}