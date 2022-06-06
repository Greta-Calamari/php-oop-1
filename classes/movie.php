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

}



?>