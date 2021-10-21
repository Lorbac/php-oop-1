<?php 

class Movie {
    public $title;
    public $year;
    public $genre;
    public $director;
    public $duration;
    public $language;

    function __construct($_title, $_year, $_genre, $_director, $_duration, $_language) {
        $this->title = $_title;
        $this->year = $_year;
        $this->genre = $_genre;
        $this->director = $_director;
        $this->title = $_title;
        $this->duration = $_duration;
        $this->language = $_language;
    }

    function getGenre() {
        return $this->genre;
    }
}

$movie1 = new Movie("Armageddon", 1998, "Science fiction", "Micheal Bay", 151, "English");
$movie2 = new Movie("Interstellar", 2014, "Science fiction", "Christopher Nolan", 169, "English");

var_dump($movie1);
var_dump($movie2);

echo $movie1->getGenre();