<?php 
class Movie{
    private $title;
    private $direction;
    private $duration;
    private $year;

    function __construct($_title, $_direction, $_duration, $_year){
        $this->title = $_title;
        $this->direction = $_direction;
        $this->duration = $_duration;
        $this->year = $_year;

    }
    public function getTitle(){
        return $this->title;
    }
    public function getDirection(){
        return $this->direction;
    }

    public function getDuration(){
        return $this->duration;
    }
    public function getYear(){
        return $this->year;
    }
        






}



?>